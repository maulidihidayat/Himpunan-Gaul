<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Konten';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->placeholder('Masukkan Judul'),
                Forms\Components\TextInput::make('description')
                    ->label('Deskripsi')

                    ->required()
                    ->placeholder('Masukkan Deskripsi'),
                Forms\Components\DateTimePicker::make('publish_date')
                    ->label('Tanggal Publikasi')
                    ->required()
                    ->placeholder('Pilih Tanggal Publikasi')
                    ->default(now()),
                Forms\Components\FileUpload::make('image')
                    ->required()
                    ->label('Gambar')
                    ->image()
                    ->disk('public')
                    ->imagePreviewHeight('150')
                    ->directory('gallery')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->disk('public')
                    ->width(200)
                    ->height(100),
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->limit(20),
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(20),
                Tables\Columns\TextColumn::make('publish_date')
                    ->label('Tanggal Publikasi')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
