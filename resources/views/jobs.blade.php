<x-app-layout  meta-title="" meta-description="">
  @php
        // file name here
        $fileName = 'Programs Officer - Job Advert.pdf'; 
    @endphp

<div class="container">
    <h2>Job Applications</h2>
    
    <div class="row">
          <div align="center">
              <p>Download the file details for the following job adverts.</p>
        <a 
            href="{{ route('file.download', ['file' => $fileName]) }}" 
            title="Download {{ $fileName }}"
            class="bg_btn bt"
        >
            {{ $fileName }}
        </a>
    </div>
    </div>
</div>
  

</x-app-layout>

