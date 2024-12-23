<x-app-layout meta-title="" meta-description="">
        @foreach($gallery as $item)
                <img src="storage/{{ $item->image }}" alt="Gallery Image" loading="lazy" onclick="openModal('{{ $item->image }}', '{{ $item->title }}')">
        @endforeach
    </div>

    <!-- Display pagination links -->
    <div class="pagination" style="margin:auto; text-align:center;" >
        {{ $gallery->links() }}
    </div>

    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 id="modal-title"></h2>
            <img id="modal-image" src="" alt="Modal Image">
        </div>
    </div>

    <script>
        function openModal(imageSrc, title) {
            document.getElementById('modal-image').src = 'storage/' + imageSrc;
            document.getElementById('modal-title').innerText = title;
            document.getElementById('modal').style.display = "block";
        }

        function closeModal() {
            document.getElementById('modal').style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == document.getElementById('modal')) {
                closeModal();
            }
        }
    </script>
</x-app-layout>
