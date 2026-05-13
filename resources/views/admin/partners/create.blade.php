@extends('layouts.admin')

@section('content')
<main class="flex-1 p-10 overflow-y-auto">
    <header class="flex justify-between items-center mb-10">
        <div>
            <h1 class="text-3xl font-black">Tambah Partner</h1>
            <p class="text-slate-500 font-medium">Masukkan data partner baru.</p>
        </div>
    </header>

    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
        <div class="px-8 py-6 bg-slate-50/50 border-b">
            <p class="text-xs font-bold uppercase tracking-widest text-slate-500">Form Partner</p>
        </div>

        <div class="px-8 py-8">
            <form action="{{ route('admin.partners.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-5">
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

                <div class="md:col-span-2 flex gap-3 items-center mt-2">
                    <button type="submit" class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 active:scale-95 transition">
                        + Simpan Partner
                    </button>

                    <a href="{{ route('admin.partners.index') }}" class="px-6 py-3 bg-white border border-slate-200 text-slate-700 rounded-2xl font-bold hover:bg-slate-50 transition">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection

