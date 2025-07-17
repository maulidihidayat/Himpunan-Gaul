<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Grid;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Konten';
    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Grid::make(2)->schema([
                TextInput::make('title')
                    ->label('Judul Berita')
                    ->required()
                    ->maxLength(150),

                DatePicker::make('publish_date')
                    ->label('Tanggal Publikasi')
                    ->required(),
            ]),

            RichEditor::make('content')
                ->label('Isi Berita')
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
                    ->label('Gambar Berita')
                    ->image()
                    ->directory('news-images')
                    ->imagePreviewHeight('150')
                    ->maxSize(2048),

                Hidden::make('created_by')
                    ->default(auth()->id()),
                TextInput::make('slug')
                    ->label('Slug')
                    ->disabled()
                    ->dehydrated()
            ]),
        ]);
    }


    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->striped()
            ->emptyStateHeading('Tidak ada berita yang ditemukan')
            ->emptyStateDescription('Silakan buat berita baru!')
            ->columns([
                TextColumn::make('title')->searchable()->limit(40),
                TextColumn::make('publish_date')->date(),
                ImageColumn::make('image')->disk('public')->width(100)
                    ->height(50),
                TextColumn::make('creator.name')->label('Author'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
