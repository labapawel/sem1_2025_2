<?php

namespace App\Filament\Resources\Pages\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\CheckboxList;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        $lang = [
                        'pl' => 'Polski',
                        'en' => 'English',
                        'de' => 'Deutsch',
                        'hu' => 'Magyar',
                    ];
        return $schema
            ->components([
                TextInput::make('tytul')
                    ->label(__('admin.title.title'))
                    ->required(),
                TextInput::make('url')
                    ->label(__('admin.title.slug'))
                    ->required(),
                Toggle::make('opublikowana')
                    ->label(__('admin.title.published')),
                Toggle::make('aktywny')
                    ->label(__('admin.title.active')),
                Select::make('jezyk')
                    ->label(__('admin.title.language'))
                    ->required()
                    ->options($lang),
                Select::make('strona_id')
                    ->label(__('admin.title.page'))
                    // ->required()
                    ->options(\App\Models\Page::where('jezyk', env('APP_LOCALE','pl'))->get()->pluck('tytul', 'id')),
                TextInput::make('uzytkownik')
                    ->label(__('admin.title.user'))
                    ->readonly(),
                RichEditor::make('zawartosc')
                    ->label(__('admin.title.content'))
                    ->columnSpan('full')
                    ->extraAttributes(['style' => 'min-height: 80vh;'])
                    ->required(),   
                CheckboxList::make('tlumacz')
                    ->label(__('admin.title.translate'))
                    ->options($lang)
                    ->required(),
       
            ]);
    }
}
