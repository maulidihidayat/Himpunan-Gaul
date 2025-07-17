<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Models\Artikel;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationIcon = 'heroicon-o-window';

    protected static ?string $navigationGroup = 'Konten';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)->schema(([
                    TextInput::make('title')
                        ->label('Judul Atrikel')
                        ->required()
                        ->maxLength(150),
                    DatePicker::make('publish_date')
                        ->label('Tanggal Publikasi')
                        ->required(),
                ])),

                RichEditor::make('content')
                    ->label('Artikel')
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

                Grid::make(1)->schema([
                    FileUpload::make('image')
                        ->label('Gambar Content')
                        ->image()
                        ->directory('artikel-images')
                        ->imagePreviewHeight('150')
                        ->maxSize(2048),

                    Hidden::make('created_by')
                        ->default(auth()->id()),
                    TextInput::make('slug')
                        ->label('Slug')
                        ->disabled()
                        ->dehydrated()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->striped()
            ->emptyStateHeading('Tidak ada artikel yang ditemukan')
            ->emptyStateDescription('Silakan buat artikel baru!')
            ->columns([
                TextColumn::make('title')->searchable()->limit(20),
                TextColumn::make('publish_date')->date(),
                ImageColumn::make('image')->disk('public')->height(20)->width(100)
                    ->height(50),
                TextColumn::make('creator.name')->label('Author'),
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}
