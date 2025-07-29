<div x-data="{ selected: null }" id="faq" class="relative px-4 pb-20 mx-auto md:px-10 md:pt-36 max-w-7xl">
    {{-- Emote --}}
    <img src="/images/emote/Emoticon Vibes-2.svg" alt="emote"
        class="absolute z-10 hidden w-12 h-12 ml-10 -mt-8 md:block md:h-20 md:w-20 md:-mt-10 md:ml-56">

    {{-- Heading --}}
    <div class="flex flex-col items-center text-center">
        <p class="max-w-2xl mb-10 text-[32px] md:text[40px] md:text-4xl font-black text-[#18181B] leading-snug">
            Pertanyaan yang <span class="text-orange-500">sering diajukan</span>
        </p>
    </div>

    {{-- FAQ Items --}}
    <div class="space-y-4">
        @foreach ($items as $index => $item)
            <div
                class="overflow-hidden transition-all duration-300 bg-orange-100 border-2 md:border-3 border-[#18181B] border-b-4 rounded-xl shadow-input dark:shadow-primary/20 hover:shadow-lg">
                <button @click="selected === {{ $index }} ? selected = null : selected = {{ $index }}"
                    class="flex items-center justify-between w-full px-4 py-3 text-left transition-colors hover:bg-white dark:hover:bg-white">
                    <h3 class="text-base md:text-lg font-bold text-[#18181B]">
                        {{ $item['question'] }}
                    </h3>
                    <svg x-bind:class="selected === {{ $index }} ? 'rotate-180' : ''"
                        class="w-5 h-5 transition-transform duration-300 transform text-[#18181B]" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="selected === {{ $index }}" x-collapse.duration.300ms x-cloak
                    class="px-4 pt-0 pb-4 text-sm md:text-base bg-white text-[#18181b] font-medium">
                    {!! $item['answer'] !!}
                </div>
            </div>
        @endforeach
    </div>
</div>
