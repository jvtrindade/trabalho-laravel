<!-- <div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <select for="{{ $name }}" name="{{ $name }}" class="form-control" id="{{ $name }}">
        @foreach ($coisas as $coisa)
            <option value="{{ $coisa->value }}">{{ $coisa->opcao }}</option>
        @endforeach
    </select>
</div> -->
<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <select for="{{ $name }}" name="{{ $name }}" class="form-control" id="{{ $name }}">
        @yield('option')
    </select>
</div>