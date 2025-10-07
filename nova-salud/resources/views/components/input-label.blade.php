@props(['value'])
<label 
  {{ $attributes }}
  style="
    display: block;
    font-weight: 500;
    font-size: 0.875rem;
    color: #000000;
    margin-bottom: 0.25rem;
  "
>
  {{ $value ?? $slot }}
</label>

