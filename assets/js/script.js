const API_URl = 'https://api.themoviedb.org/3/discover/movie?sort_by=popularity.desc&api_key=15005c48f2625def09dacd3d0fc01762&page=1';

const IMG_Path = 'https://image.tmdb.org/t/p/w1280';

const Search_Url = 'https://api.themoviedb.org/3/search/movie?api_key=15005c48f2625def09dacd3d0fc01762&query="';

const form = document.getElementById('form');
const search = document.getElementById('search');
getMovies(API_URl);
async function getMovies(url) {
    const res = await fetch(url);
    const data = await res.json();
    showMovies(data.results);


}
function showMovies(movies) {
    main.innerHTML = '';
    movies.forEach((movie) => {
        const { title, poster_path, vote_average, } = movie;
        movie = document.createElement('div'); 
        movie.classList.add('movie');
        movie.innerHTML = `
        <div class="movie-card">

        <div class="card-head">
          <img src="${IMG_Path+poster_path}" alt="${title}" class="card-img">

          <div class="card-overlay">

            <div class="bookmark">
              <ion-icon name="bookmark-outline"></ion-icon>
            </div>

            <div class="${vote_average}">
              <ion-icon name="star-outline"></ion-icon>
              <span>7.4</span>
            </div>

            <div class="play">
              <ion-icon name="play-circle-outline"></ion-icon>
            </div>

          </div>
        </div>

        <div class="card-body">
          <h3 class="card-title">${title}</h3>

          <div class="card-info">
            <span class="genre">Action/Adventure</span>
            <span class="year">2017</span>
          </div>
        </div>

      </div>
      `
    });
}



form.addEventListener('submit', (e) => {
    e.preventDefault();
    const searchTerm = search.value;
    if (searchTerm && searchTerm !== '') {
        getMovies(Search_Url + searchTerm)
        search.value = '';
    } else {
        window.location.reload()
    }
});