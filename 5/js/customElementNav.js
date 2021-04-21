class NavDraft extends HTMLElement {
 
 render() {
     this.innerHTML = `
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">DraftPick App</a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/app">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/hero">Hero</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/player">Player</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/meet">Pertandingan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/draft">Draft</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/role">Role</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    Menang <b>DraftPick</b>, Besar Kemungkinan <b>Victory</b>
                </span>
                </div>
            </div>
            </nav>
    `;
 }
 
}
 
customElements.define("Nav-Draft", NavDraft);
