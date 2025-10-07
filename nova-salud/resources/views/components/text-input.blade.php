@props(['disabled' => false])

<input 
  @disabled($disabled)
  {{ $attributes }}
  style="
    width: 100%;
    border: 1px solid #80deea;
    background-color: #f1fcfd;
    color: #045e66;
    border-radius: 6px;
    padding: 0.5rem 0.75rem;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    transition: all 0.2s ease-in-out;
  "
  onfocus="this.style.borderColor='#00acc1'; this.style.boxShadow='0 0 0 3px rgba(0, 172, 193, 0.2)';"
  onblur="this.style.borderColor='#80deea'; this.style.boxShadow='0 1px 2px rgba(0,0,0,0.05)';"
/>
