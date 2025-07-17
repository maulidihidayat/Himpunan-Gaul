<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use BladeUI\Icons\Components\Icon;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';


    public static function canAccess(): bool
    {
        return auth()->user()?->isSuperAdmin();
    }

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()?->isSuperAdmin();
    }

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()
                    ->placeholder('Masukkan Nama')
                    ->maxLength(50)
                    ->label('Nama Pengguna')
                    ->required(),
                TextInput::make('email')->email()->required()->unique(ignoreRecord: true)
                    ->placeholder('Masukkan email')
                    ->label('Email')
                    ->required()
                    ->email()
                    ->unique(ignoreRecord: true)
                    ->placeholder('Masukkan email')
                    ->autocomplete('new-email')
                    ->disabled(fn(string $context) => $context === 'edit'),
                TextInput::make('password')
                    ->password()
                    ->placeholder('Masukan Password')
                    ->required(fn(string $context): bool => $context === 'create')
                    ->dehydrateStateUsing(fn($state) => !empty($state) ? bcrypt($state) : null)
                    ->label('Password')
                    ->revealable()
                    ->autocomplete('new-password'),
                Select::make('role')
                    ->options([
                        'admin' => 'Admin',
                        'super_admin' => 'Super Admin',
                    ])
                    ->label('Peran')
                    ->required(),
            ]);
    }


    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->striped()
            ->emptyStateHeading('Tidak ada user yang ditemukan')
            ->emptyStateDescription('Silakan buat user baru!')
            ->columns([
                TextColumn::make('name')->searchable()
                    ->label('Nama'),
                TextColumn::make('email')->searchable()
                    ->label('Email'),
                TextColumn::make('role')
                    ->label('Peran')
                    ->badge()
                    ->color(fn($state) => $state === 'admin' ? 'success' : ($state === 'super_admin' ? 'warning' : 'secondary'))
                    ->icon(fn($state) => $state === 'admin' ? 'heroicon-o-shield-check' : ($state === 'super_admin' ? 'heroicon-o-shield-exclamation' : 'heroicon-o-user')),
                TextColumn::make('created_at')->dateTime('d M Y')
                    ->label('Tanggal Dibuat'),
            ])
            ->actions([
                EditAction::make()->visible(fn() => auth()->user()?->isSuperAdmin()),
                DeleteAction::make()->visible(fn() => auth()->user()?->isSuperAdmin()),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
