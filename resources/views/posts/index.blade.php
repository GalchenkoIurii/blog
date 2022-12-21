<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="mx-auto py-4 max-w-7xl lg:px-8">
        <div class="relative px-4 py-4 sm:px-8 lg:px-12">
            <div class="mx-auto max-w-2xl lg:max-w-5xl">
                <div class="mx-auto grid max-w-xl grid-cols-1 gap-y-20 lg:max-w-none lg:grid-cols-2">
                    <div class="flex flex-col gap-16">
                        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                            @if(count($posts))
                                @foreach($posts as $post)
                                    <x-post :$post/>
                                @endforeach
                            @else
                                <h2 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                                    <span class="relative z-10">There are no posts...</span>
                                </h2>
                            @endif
                        </div>
                        {{ $posts->links() }}
                    </div>
                    <div class="space-y-10 lg:pl-16 xl:pl-24">
                        <form action="" class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40">
                            <h2 class="flex text-sm font-semibold text-zinc-900 dark:text-zinc-100">
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round"
                                     stroke-linejoin="round" aria-hidden="true" class="h-6 w-6 flex-none">
                                    <path d="M2.75 7.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z"
                                          class="fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500"></path>
                                    <path d="m4 6 6.024 5.479a2.915 2.915 0 0 0 3.952 0L20 6" class="stroke-zinc-400 dark:stroke-zinc-500"></path>
                                </svg>
                                <span class="ml-3">Stay up to date</span>
                            </h2>
                            <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">
                                Get notified when I publish something new, and unsubscribe at any time.
                            </p>
                            <div class="mt-6 flex">
                                <input type="email" placeholder="Email address" aria-label="Email address" required=""
                                       class="min-w-0 flex-auto appearance-none rounded-md border border-zinc-900/10
                                       bg-white px-3 py-[calc(theme(spacing.2)-1px)] shadow-md shadow-zinc-800/5 placeholder:text-zinc-400
                                       focus:border-teal-500 focus:outline-none focus:ring-4 focus:ring-teal-500/10 dark:border-zinc-700
                                       dark:bg-zinc-700/[0.15] dark:text-zinc-200 dark:placeholder:text-zinc-500 dark:focus:border-teal-400
                                       dark:focus:ring-teal-400/10 sm:text-sm">
                                <button class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2
                                    transition active:transition-none bg-zinc-800 font-semibold text-zinc-100 hover:bg-zinc-700
                                    active:bg-zinc-800 active:text-zinc-100/70 dark:bg-zinc-700 dark:hover:bg-zinc-600 dark:active:bg-zinc-700
                                    dark:active:text-zinc-100/70 ml-4 flex-none" type="submit">Join</button>
                            </div>
                        </form>
                        <div class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40">
                            <h2 class="flex text-sm font-semibold text-zinc-900 dark:text-zinc-100">
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round"
                                     stroke-linejoin="round" aria-hidden="true" class="h-6 w-6 flex-none">
                                    <path d="M2.75 9.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z"
                                          class="fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500"></path>
                                    <path d="M3 14.25h6.249c.484 0 .952-.002 1.316.319l.777.682a.996.996 0 0 0 1.316 0l.777-.682c.364-.32.832-.319 1.316-.319H21M8.75 6.5V4.75a2 2 0 0 1 2-2h2.5a2 2 0 0 1 2 2V6.5"
                                          class="stroke-zinc-400 dark:stroke-zinc-500"></path>
                                </svg>
                                <span class="ml-3">Work</span>
                            </h2>
                            <ol class="mt-6 space-y-4">
                                <li class="flex gap-4">
                                    <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center
                                        rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border
                                        dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                                        <img alt="" src="" decoding="async" data-nimg="1" class="h-7 w-7"
                                             loading="lazy" style="color:transparent" width="32" height="32">
                                    </div>
                                    <dl class="flex flex-auto flex-wrap gap-x-2">
                                        <dt class="sr-only">Company</dt>
                                        <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">Planetaria</dd>
                                        <dt class="sr-only">Role</dt>
                                        <dd class="text-xs text-zinc-500 dark:text-zinc-400">CEO</dd>
                                        <dt class="sr-only">Date</dt>
                                        <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500"
                                            aria-label="2019 until Present">
                                            <time datetime="2019">2019</time>
                                            <span aria-hidden="true">—</span>
                                            <time datetime="2022">Present</time>
                                        </dd>
                                    </dl>
                                </li>
                                <li class="flex gap-4">
                                    <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center
                                        rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border
                                        dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                                        <img alt="" src="" decoding="async" data-nimg="1" class="h-7 w-7"
                                             loading="lazy" style="color:transparent" width="28" height="28">
                                    </div>
                                    <dl class="flex flex-auto flex-wrap gap-x-2">
                                        <dt class="sr-only">Company</dt>
                                        <dd class="w-full flex-none text-sm font-medium text-zinc-900
                                            dark:text-zinc-100">Airbnb</dd>
                                        <dt class="sr-only">Role</dt>
                                        <dd class="text-xs text-zinc-500 dark:text-zinc-400">Product Designer</dd>
                                        <dt class="sr-only">Date</dt>
                                        <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500"
                                            aria-label="2014 until 2019">
                                            <time datetime="2014">2014</time>
                                            <span aria-hidden="true">—</span>
                                            <time datetime="2019">2019</time>
                                        </dd>
                                    </dl>
                                </li>
                                <li class="flex gap-4">
                                    <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center
                                        rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border
                                        dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                                        <img alt="" src="" decoding="async" data-nimg="1" class="h-7 w-7"
                                             loading="lazy" style="color:transparent" width="28" height="28">
                                    </div>
                                    <dl class="flex flex-auto flex-wrap gap-x-2">
                                        <dt class="sr-only">Company</dt>
                                        <dd class="w-full flex-none text-sm font-medium text-zinc-900
                                            dark:text-zinc-100">Facebook</dd>
                                        <dt class="sr-only">Role</dt>
                                        <dd class="text-xs text-zinc-500 dark:text-zinc-400">iOS Software Engineer</dd>
                                        <dt class="sr-only">Date</dt>
                                        <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500"
                                            aria-label="2011 until 2014">
                                            <time datetime="2011">2011</time>
                                            <span aria-hidden="true">—</span>
                                            <time datetime="2014">2014</time>
                                        </dd>
                                    </dl>
                                </li>
                                <li class="flex gap-4">
                                    <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center
                                        rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border
                                        dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                                        <img alt="" src="" decoding="async" data-nimg="1" class="h-7 w-7"
                                             loading="lazy" style="color:transparent" width="28" height="28">
                                    </div>
                                    <dl class="flex flex-auto flex-wrap gap-x-2">
                                        <dt class="sr-only">Company</dt>
                                        <dd class="w-full flex-none text-sm font-medium text-zinc-900
                                            dark:text-zinc-100">Starbucks</dd>
                                        <dt class="sr-only">Role</dt>
                                        <dd class="text-xs text-zinc-500 dark:text-zinc-400">Shift Supervisor</dd>
                                        <dt class="sr-only">Date</dt>
                                        <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500"
                                            aria-label="2008 until 2011">
                                            <time datetime="2008">2008</time>
                                            <span aria-hidden="true">—</span>
                                            <time datetime="2011">2011</time>
                                        </dd>
                                    </dl>
                                </li>
                            </ol>
                            <a class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm
                                outline-offset-2 transition active:transition-none bg-zinc-50 font-medium text-zinc-900
                                hover:bg-zinc-100 active:bg-zinc-100 active:text-zinc-900/60 dark:bg-zinc-800/50
                                dark:text-zinc-300 dark:hover:bg-zinc-800 dark:hover:text-zinc-50 dark:active:bg-zinc-800/50
                                dark:active:text-zinc-50/70 group mt-6 w-full" href="/#">Download CV
                                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"
                                     class="h-4 w-4 stroke-zinc-400 transition group-active:stroke-zinc-600
                                     dark:group-hover:stroke-zinc-50 dark:group-active:stroke-zinc-50">
                                    <path d="M4.75 8.75 8 12.25m0 0 3.25-3.5M8 12.25v-8.5" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(session()->has('success'))
        <div class="modal relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">{{ session('success') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" class="close-btn mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</x-app-layout>
