@extends('layouts.admin')

@section('content')
<main class="flex-1 p-10 overflow-y-auto">
    <header class="flex justify-between items-center mb-10">
        <div>
            <h1 class="text-3xl font-black">Kelola Partner</h1>
            <p class="text-slate-500 font-medium">Daftar partner yang mendukung platform digital ini.</p>
        </div>
        <a href="{{ route('admin.partners.index') }}" class="hidden"></a>
    </header>

    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
        <div class="px-8 py-6 bg-slate-50/50 border-b flex gap-4">
            <p class="text-xs font-bold uppercase tracking-widest text-slate-500">Partner List</p>
        </div>

        <div class="px-8 py-6">
            <div class="max-w-3xl">
                <form action="{{ route('admin.partners.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" required
                            class="w-full px-4 py-3 rounded-xl border-slate-200 border bg-white outline-none focus:ring-2 focus:ring-indigo-500" />
                        @error('name')
                            <p class="text-xs text-rose-600 font-bold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Logo URL</label>
                        <input type="text" name="logo_url" value="{{ old('logo_url') }}" required
                            placeholder="https://placehold.co/200x200"
                            class="w-full px-4 py-3 rounded-xl border-slate-200 border bg-white outline-none focus:ring-2 focus:ring-indigo-500" />
                        @error('logo_url')
                            <p class="text-xs text-rose-600 font-bold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md:col-span-2">
                        <button type="submit" class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 active:scale-95 transition">
                            + Simpan Partner
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                    <tr>
                        <th class="px-8 py-4 w-16">No</th>
                        <th class="px-8 py-4">Logo</th>
                        <th class="px-8 py-4">Partner</th>
                    </tr>
                </thead>
                <tbody class="divide-y border-t">
                    @foreach($partners as $index => $partner)
                        <tr class="hover:bg-slate-50/50 transition">
                            <td class="px-8 py-6 font-bold text-slate-400">{{ $index + 1 }}</td>
                            <td class="px-8 py-6">
                                <img src="{{ $partner->logo_url }}" class="w-16 h-20 rounded-xl object-cover shadow-sm" alt="Logo {{ $partner->name }}">
                            </td>
                            <td class="px-8 py-6">
                                <p class="font-black text-slate-800">{{ $partner->name }}</p>
                                <p class="text-xs text-slate-400 break-all">{{ $partner->logo_url }}</p>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection

