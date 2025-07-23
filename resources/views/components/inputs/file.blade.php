@props(['id', 'name', 'label' => null, 'required' => false])

<div class="mb-4">
    <label class="block text-gray-700" for="{{ $id }}">{{ $label }}</label>
    <input {{ $required ? 'required' : '' }} id="{{ $id }}" type="file" name="{{ $name }}"
        class="w-full px-4 py-2 border rounded focus:outline-none @error('{{ $name }}') border-red-500 @enderror" />
    @error('{{ $name }}')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
