<div x-data="{ selected: null }" id="faq" class="px-10 pt-56 pb-20 mx-auto max-w-7xl">
    <img src="/images/emote/Emoticon Vibes-2.svg" alt="emote" class="absolute z-10 mb-20 ml-56 -mt-10 h-15 w-15">
    <div class="flex flex-col items-center">
        {{-- <h2 class="mb-2 text-3xl font-bold text-center md:text-7xl text-[#18181B] ">
            FAQ
        </h2> --}}
        <p class="max-w-2xl mb-12 text-[40px] text-center md:text-[40px] text-[#18181B]  font-black">
            Pertanyaan yang <span class="text-orange-500">sering diajukan</span>
        </p>
    </div>

    <div class="space-y-4">
        @foreach ($items as $index => $item)
            <div
                class="overflow-hidden transition-all duration-300 bg-orange-100 border-3 border-[#18181B] border-b-4 rounded-xl shadow-input dark:shadow-primary/20 hover:shadow-lg">
                <button @click="selected === {{ $index }} ? selected = null : selected = {{ $index }}"
                    class="flex items-center justify-between w-full p-4 text-left transition-colors hover:bg-white dark:hover:bg-white">
                    <h3 class="text-[20px] font-bold md:text-lg text-[#18181B]">
                        {{ $item['question'] }}
                    </h3>
                    <svg x-bind:class="selected === {{ $index }} ? 'rotate-180' : ''"
                        class="w-5 h-5 transition-transform duration-300 transform text-[#18181B]" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="selected === {{ $index }}" x-collapse.duration.300ms x-cloak
                    class="px-4 pt-0 pb-4 text-[20px] bg-white text-[#52525B] font-normal">
                    {!! $item['answer'] !!}
                </div>
            </div>
        @endforeach
    </div>
</div>
