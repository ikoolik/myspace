<div class="h-screen flex items-center justify-center font-mono">
    <div class="text-2xl selection:bg-red-700 selection:text-white">
        <div wire:poll.10s class="flex">
            <div class="relative">
                @if ($isActive)
                    <div class="absolute bg-red-600 rounded-full" style="width: 10px; height: 10px; left: -28px; top: 12px;"></div>
                @endif
                <div>Today</div>
                <div class="mt-4">{{ $tgoal }}%</div>
                <div class="mt-2 text-gray-800 hover:text-gray-300">${{ number_format($tearned) }}</div>
                <div class="mt-2 text-gray-800 hover:text-gray-300">{{ $thours }} hours</div>
            </div>

            <div class="ml-36">
                <div>Month</div>
                <div class="mt-4">{{ $goal }}%</div>
                <div class="mt-2 text-gray-800 hover:text-gray-300">${{ number_format($earned) }}</div>
                <div class="mt-2 text-gray-800 hover:text-gray-300">{{ $hours }} hours</div>
            </div>
        </div>

        <div class="mt-4 group">
            <span class="hidden group-hover:inline-block">
                Pace
                <span class="{{ $pace < 0 ? 'text-yellow-500' : ($pace > 0 ? 'text-green-500' : '') }}">
                    {{ $pace < 0 ? '-' : ($pace > 0 ? '+' : '') }}{{ $pace }} hours
                </span>
            </span>
            &nbsp;
        </div>
    </div>

    <a href="/month-review" class="absolute text-gray-600 hover:text-gray-100 hover:border-b hover:cursor-pointer" style="bottom: 24px; right: 48px;">Month review</a>
</span>
