<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label(__('admin.title.name'))
                    ->required(),
                TextInput::make('email')
                    ->label(__('admin.title.email'))
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at')
                    ->label(__('admin.title.emailVer'))
                ,
                TextInput::make('password')
                    ->password()
                    ->label(__('admin.title.password'))
                    ->required(),
            ]);
    }
}
