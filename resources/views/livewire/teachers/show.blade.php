    <div class="modal fade" id="teacherModal{{ $teacher->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ustoz haqida</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p><strong>Ismi:</strong> {{ $teacher->firstname}} {{$teacher->lastname}}</p>
                <p><strong>Email:</strong> {{ $teacher->email }}</p>
                <p><strong>Telefon:</strong> {{ $teacher->phone }}</p>
                <!-- Boshqa ma'lumotlar ham qo‘shsa bo‘ladi -->
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
            </div>
        </div>
    </div>
</div>
