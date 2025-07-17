<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KepengurusanResource\Pages;
use App\Filament\Resources\KepengurusanResource\RelationManagers;
use App\Models\Kepengurusan;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KepengurusanResource extends Resource
{
    protected static ?string $model = Kepengurusan::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Manajemen';

    public static function form(Form $form): Form
    {
        return $form

            ->schema([
                TextInput::make('name')
                    ->label("Nama")
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan Nama'),

                Select::make('position_title')
                    ->label('Jabatan')
                    ->required()
                    ->options([
                        'Ketua' => 'Ketua',
                        'Wakil Ketua' => 'Wakil Ketua',
                        'Bendahara' => 'Bendahara',
                        'Humas' => 'Humas',
                        'Medinfo' => 'Medinfo',
                        'Minkat' => 'Minkat',
                        'Agama' => 'Agama',
                    ]),
                TextInput::make('period')
                    ->label('Periode')
                    ->helperText(('Contoh: 2023-2024')),
                FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->disk('public')
                    ->imagePreviewHeight('150')
                    ->directory('kepengurusan')
                    ->helperText('Jika tidak ada bisa dikosongkan'),
                Hidden::make('peran')
                    ->default(auth()->id()),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->striped()
            ->emptyStateHeading('Belum ada data kepengurusan')
            ->emptyStateDescription('Silakan buat data kepengurusan baru.')
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('position_title')->label('Jabatan')->searchable(),
                TextColumn::make('period')->label('Periode')->searchable(),
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->disk('public')
                    ->circular(),
                // TextColumn::make('peran.user_id')->label('Peran Pengurus'),
            ])
            ->filters([])
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
            'index' => Pages\ListKepengurusans::route('/'),
            'create' => Pages\CreateKepengurusan::route('/create'),
            'edit' => Pages\EditKepengurusan::route('/{record}/edit'),
        ];
    }
}
