import { debounce } from "./utils";

document.addEventListener('DOMContentLoaded', () => {
    const inputEl = document.getElementById('autocomplete-search');
    const resultsEl = document.getElementById('autocomplete-results');
    
    const auth = {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'X-WP-Nonce': data.nonce, //Check the nonce we generated before
        }
    }
    
    if (inputEl) {
        const transformJson = (json) => {
            return json.map(el => `<li class="w-100"><a class='d-block text-decoration-none py-3 px-3 text-dark' href='${el.permalink}'>${el.label}</a></li>`).join('');
        }
    
        const setAutocomplete = (json) => {
            resultsEl.innerHTML = transformJson(json);
        }
    
        inputEl.addEventListener('input', debounce((e) => {
            const input = e.target.value;
    
            if (input.length > 2) {
                fetch(`${data.search_url}${input}`, auth)
                    .then(d => d.json())
                    .then(json =>setAutocomplete(json))
                    .catch(e => console.error(e.message));
            }
        }, 1000));
    }
})
