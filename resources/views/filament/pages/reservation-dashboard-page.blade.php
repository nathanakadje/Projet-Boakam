<x-filament-panels::page>
    <x-filament-widgets::widgets
        :widgets="$this->getHeaderWidgets()"
        :columns="$this->getHeaderWidgetsColumns()"
    />
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach ($this->getWidgets() as $widget)
            <div>
                @livewire($widget)
            </div>
        @endforeach
    </div>
</x-filament-panels::page>