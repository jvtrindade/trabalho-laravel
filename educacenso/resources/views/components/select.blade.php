<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <select name="{{ $name }}" class="form-control" id="{{ $name }}">
        @foreach($coisas as $coisa)
            <option value="{{ $coisa->id }}">{{ $coisa->nome }}</option>
        @endforeach
    </select>
</div>
