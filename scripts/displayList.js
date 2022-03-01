function displayList(data_source, wrapper, rows_per_page, page) {
    wrapper.innerHTML = "";

    if (data_source.length === 0) {
        console.log("empty object here");
    }

    if (typeof(data_source) !== 'object') {
        let error_element = document.createElement('p');
        error_element.innerText = "No results returned. Please check if query is valid.";
        wrapper.appendChild(error_element);
        return;
    }

    // account for cases where page does have cards but not up to
    // rows_per_page
    for (let i = 0; i < rows_per_page; i++) {
        let card_element = document.createElement('div');
        let card_image = document.createElement('img');
        //card_image.classList.add("lazy");
        //card_image.datasrc = data_source[i]['imageUrl'];
        //card_image.setAttribute("class", "data-src");
        //card_image.setAttribute("data-src", data_source[i]['imageUrl']); 
        //card_image.data-src = data_source[i]['imageUrl'];
        //card_image.loading = "lazy";
        card_image.src = data_source[i]['imageUrl'];
        card_image.setAttribute("index", i);
        card_image.setAttribute("onclick", "modal_config(" + i + ")");
        card_element.appendChild(card_image);
        wrapper.appendChild(card_element);
    }
}