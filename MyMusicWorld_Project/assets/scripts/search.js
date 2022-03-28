function searchAlbum(data){
    $('#results').empty();
    data.albums.items.forEach( album =>
        $('#results').append(
                   `<div class="max-w-xs mx-auto bg-white shadow-lg rounded-lg">
                        <div class="pt-3">
                        <div class="rounded-lg mx-auto" style="height: 300px; width: 300px;" >
                            <img class="rounded-lg mx-auto overflow-hidden" style="min-height: 300px; max-height: 300px" src="`+album.images[0].url+`"/>
                        </div>
                            <div class="pt-6 pb-4 px-5">
                            <h1 class="text-gray-700 font-bold text-2xl mb-3 text-ellipsis overflow-hidden h-9">`+album.name+`</h1>
                            <p class="overflow-clip overflow-hidden text-gray-700 tracking-wide mb-5" style="width: 280px;">Artist: `+album.artists[0].name+`</p>
                            <a href="album.php?q=`+album.id+`" class="text-gray-700 font-bold hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-6">View more</a>
                            </div>
                        </div>
                    </div>`)
    )
}

function searchTracks(data) {
    $('#results').empty();
    data.tracks.items.forEach( track =>
        $('#results').append(
        `<div class="max-w-xs mx-auto bg-white shadow-lg rounded-lg">
          <div class="pt-3">
            <div class="rounded-lg mx-auto" style="height: 300px; width: 300px;" >
                <img class="rounded-lg mx-auto overflow-hidden" style="min-height: 300px; max-height: 300px" src="`+track.album.images[0].url+`"/>
            </div>
                <div class="pt-6 pb-4 px-5">
                <h1 class="text-gray-700 font-bold text-2xl mb-3 overflow-clip overflow-hidden h-9" aria-label="View the full review">`+track.name+`</h1>
                <p class="overflow-clip overflow-hidden text-gray-700 tracking-wide mb-5" style="width: 280px;">Album: `+track.album.name+` <br> Artist: `+track.artists[0].name+`</p>

                <a href="album.php?q=`+track.album.id+`" class="text-gray-700 font-bold hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-6">View more</a>
                </div>
            </div>
        </div>`
        ) 
    )
}

function searchArtists(data) {
    $('#results').empty();
    data.artists.items.forEach( artist =>
        $('#results').append(
        `<div class="max-w-xs mx-auto bg-white shadow-lg rounded-lg">
            <div class="pt-3">
            <div class="rounded-lg mx-auto" style="height: 300px; width: 300px;" >
                <img class="rounded-lg mx-auto overflow-hidden" style="min-height: 300px; max-height: 300px; min-width: 300px; max-width: 300px" src="`+artist.images[0].url+`"/>
            </div>
                <div class="pt-6 pb-4 px-5">
                <h1 class="text-gray-700 font-bold text-2xl mb-3 overflow-clip overflow-hidden h-9" style="width: 280px;" aria-label="View the full review">`+artist.name+`</h1>
                <a class="text-gray-700 font-bold hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-6">View more</a>
                </div>
            </div>
        </div>`
        ) 
    )
}