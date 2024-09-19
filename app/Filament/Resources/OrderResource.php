<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        '0' => 'Pending',
                        '1' => 'Accepted',
                        '2' => 'Declined',
                    ])
                ->native(false)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('customer.name')
                    ->label('Customer name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('name')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('address')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->markdown()
                    ->limit(20),
                TextColumn::make('remark')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->markdown()
                    ->limit(25),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->formatStateUsing(function ($state) {
                        return match ($state) {
                            '0' => 'Pending',
                            '1' => 'Accepted',
                            '2' => 'Declined',
                            default => 'Unknown',
                        };
                    })
                    ->color(fn (string $state): string => match ($state) {
                        '0' => 'warning',
                        '1' => 'success',
                        '2' => 'danger',
                        default => 'gray',
                    })

            ])

//        ['customer_id', 'name', 'address', 'status', 'remark'];
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make()
                    ->label('Update Status'),
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
            'index' => Pages\ListOrders::route('/'),
//            'create' => Pages\CreateOrder::route('/create'),
            'view' => Pages\ViewOrder::route('/{record}'),
//            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
