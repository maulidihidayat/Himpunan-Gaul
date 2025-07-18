<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeasiswaResource\Pages;
use App\Filament\Resources\BeasiswaResource\RelationManagers;
use App\Models\Beasiswa;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BeasiswaResource extends Resource
{
    protected static ?string $model = Beasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';
    protected static ?string $navigationGroup = 'Konten';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Split::make([
                    Section::make([
                        TextInput::make('title')
                            ->label('Judul Beasiswa')
                            ->placeholder("masukkan judul")
                            ->required()
                            ->maxLength(150),
                        DatePicker::make('publish_date')
                            ->label('Tanggal Publikasi')
                            ->required(),
                        FileUpload::make('image')
                            ->label('Gambar Beasiswa')
                            ->image()
                            ->maxSize(51200)
                            ->directory('pencapaian_images')
                            ->nullable(),
                    ]),
                ]),
                Section::make([
                    RichEditor::make("description")
                        ->label('Deskripsi Beasiswa')
                        ->required()
                        ->toolbarButtons([
                            'attachFiles',
                            'blockquote',
                            'bold',
                            'bulletList',
                            'codeBlock',
                            'h2',
                            'h3',
                            'italic',
                            'link',
                            'orderedList',
                            'redo',
                            'strike',
                            'underline',
                            'undo',
                        ])
                        ->columnSpan('full'),
                ]),
                TextInput::make('slug')
                    ->label('Slug')
                    ->disabled()
                    ->dehydrated(),
                Hidden::make('publish_by')
                    ->default(auth()->id())
                    ->required()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->striped()
            ->emptyStateHeading('Tidak ada pencapaian yang ditemukan')
            ->emptyStateDescription('Silahkan tambahkan pencapaian baru!')
            ->columns([
                TextColumn::make('title')
                    ->label('Judul Pencapaian')
                    ->limit(30)
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('image')->disk('public')->height(50),
                TextColumn::make('publish_date')
                    ->label('Tanggal Publikasi')
                    ->date(),
                TextColumn::make('creator.name')->label('Author'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListBeasiswas::route('/'),
            'create' => Pages\CreateBeasiswa::route('/create'),
            'edit' => Pages\EditBeasiswa::route('/{record}/edit'),
        ];
    }
}
