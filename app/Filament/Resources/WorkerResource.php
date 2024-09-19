<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkerResource\Pages;
use App\Filament\Resources\WorkerResource\RelationManagers;
use App\Models\Worker;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkerResource extends Resource
{
    protected static ?string $model = Worker::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    -> label('Name')
                    ->placeholder('Please enter worker name')
                    ->required()
                    ->autocomplete(false),
                TextInput::make('email')
                    ->label('Email')
                    ->placeholder('Please enter worker email')
                    ->email()
                    ->required()
                    ->autocomplete(false)
                    ->unique(ignoreRecord: true),
                TextInput::make('phone')
                    ->label('Phone Number')
                    ->placeholder('Please enter worker phone number')
                    ->tel()
                    ->required()
                    ->autocomplete(false)
                    ->unique(ignoreRecord: true),
                Forms\Components\DatePicker::make('start_date')
                    ->label('Start Date')
                    ->placeholder('Please enter worker start date')
                    ->native(false),
                TextInput::make('nrc')
                    ->label('NRC')
                    ->placeholder('Please enter nrc')
                    ->rules(['regex:/^(\d{1,2})\/([a-zA-Z]+)\([A-Z]\)\d{6}$/'])
                    ->helperText('Example: 12/thakata(N)123456')
                    ->autocomplete(false)
                    ->unique(ignoreRecord: true),
                Forms\Components\Select::make('categories')
                    ->label('Categories')
                    ->placeholder('Please select category')
                    ->relationship('categories', 'name')
                    ->multiple()
                    ->searchable()
                    ->preload(),
                Toggle::make('status')
                    ->default(true)
                    ->label('Status')
                    ->onIcon('heroicon-m-check')
                    ->offIcon('heroicon-m-no-symbol')
                    ->onColor('success')
                    ->offColor('danger')
            ]);

//        ['name', 'email', 'nrc', 'phone', 'status', 'start_date'];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->copyable()
                    ->copyMessage('Email Copied Successfully'),
                TextColumn::make('phone')
                    ->label('Phone Number')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('info')
                    ->copyable()
                    ->copyMessage('Phone Number Copied Successfully'),
                TextColumn::make('nrc')
                    ->label('NRC')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('warning')
                    ->copyable()
                    ->copyMessage('NRC Copied Successfully')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\ToggleColumn::make('status')
                    ->label('Status')
                    ->onIcon('heroicon-m-check')
                    ->offIcon('heroicon-m-no-symbol')
                    ->onColor('success')
                    ->offColor('danger'),
                TextColumn::make('start_date')
                    ->label('Start Date')
                    ->date()
                    ->sortable(),
                TextColumn::make('categories.name')
                    ->label('Categories')
                    ->badge()
                    ->sortable()
                    ->searchable()
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('categories')
                    ->label('Categories')
                    ->relationship('categories', 'name')
                    ->searchable()
                    ->preload()
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
            'index' => Pages\ListWorkers::route('/'),
            'create' => Pages\CreateWorker::route('/create'),
            'view' => Pages\ViewWorker::route('/{record}'),
            'edit' => Pages\EditWorker::route('/{record}/edit'),
        ];
    }
}
