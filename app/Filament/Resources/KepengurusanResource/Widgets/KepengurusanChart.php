<?php

namespace App\Filament\Widgets;

use App\Models\Kepengurusan;
use App\Models\Registrasi;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class KepengurusanChart extends ChartWidget
{
    protected static ?string $heading = 'Jumlah Pengurus';
    protected static ?int $sort = 1;

    protected function getData(): array
    {
        $data = Kepengurusan::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', now()->year)
            ->groupBy('month')
            ->orderBy('month')
            ->get()
            ->keyBy('month');

        $months = collect(range(1, 12))->map(function ($month) use ($data) {
            return $data->get($month)?->total ?? 0;
        });

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Pengurus',
                    'data' => $months->toArray(),
                ],
            ],
            'labels' => collect(range(1, 12))->map(fn($m) => Carbon::create()->month($m)->translatedFormat('M'))->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
