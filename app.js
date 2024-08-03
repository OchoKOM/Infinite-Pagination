function initInfiniteScroll(container, display, args) {
    let currentPage = 1;
    let isLoading = false;
    let lastLoadedItemId = null;
    let hasMorePages = true;

    const direction = args.direction
    // loadPages(currentPage, lastLoadedItem)

    function loadPages(page, lastLoadedItem) {
        if (isLoading || !hasMorePages) return;

        isLoading = true;
        const loader = document.getElementById("loader");
        loader.classList.add('show');

        const xhr = new XMLHttpRequest();

        xhr.open('GET', `${args.url}?page=${page}&lastItemId=${lastLoadedItem}`, true);
        xhr.onload = () => {
            isLoading = false;

            if (xhr.status === 200) {
                try {
                    const endOfPages = document.getElementById('end-of-content')
                    const data = JSON.parse(xhr.responseText)
                    args.data = data.products

                    if (args.data.length) {
                        display(args)

                        lastLoadedItemId = args.data[args.data.length-1].id;
                        if (data.isLastPage) {
                            hasMorePages = false;

                            endOfPages.classList.add('show');
                        }else{
                            currentPage++;
                            endOfPages.classList.remove('show');
                        }
                    }else{
                        hasMorePages = false;
                        endOfPages.classList.add('show');
                    }
                } catch (error) {
                    console.log(error);
                }
            }else{
                console.log("Erreur", xhr.status);
            }
            loader.classList.remove('show');
            
        }
        xhr.send();
    }
}
function prepend({ msg }) {
    console.log(msg);
}

initInfiniteScroll(null, prepend, { direction: "down", url: './fetch_data.php' });