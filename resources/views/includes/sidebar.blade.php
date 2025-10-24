<aside class="sidebar">
    <img src="{{ $identitas->foto_profil }}" alt="Foto Profil {{ $identitas->nama_lengkap }}" class="profile-img">
    
    <h4 class="mb-3">{{ $identitas->nama_lengkap }}</h4>
    
    <ul class="sidebar-list">
        <li>
            <span class="icon"><i class="bi bi-calendar-event"></i></span>
            <span>{{ $identitas->ttl }}</span>
        </li>
        <li>
            <span class="icon"><i class="bi bi-geo-alt-fill"></i></span>
            <span>{{ $identitas->alamat }}</span>
        </li>
        <li>
            <span class="icon"><i class="bi bi-envelope-fill"></i></span>
            <span>{{ $identitas->email }}</span>
        </li>
        <li>
            <span class="icon"><i class="bi bi-telephone-fill"></i></span>
            <span>
                <a href="{{ $identitas->wa_link ?? ('tel:'.$identitas->telepon) }}" target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                    {{ $identitas->telepon }}
                </a>
            </span>
        </li>
    </ul>
</aside>