@if (flash()->message)
    <div class="alert alert-{{ flash()->class }}"><i class="bi bi-info-circle-fill mr2"></i> {{ flash()->message }}</div>
@endif
