function openQuickView(productId) {
    fetch('komponen/product_quickview.php?id=' + productId)
        .then(response => response.text())
        .then(html => {
            document.getElementById('quickview-container').innerHTML = html;
        });
}

function closeQuickView() {
    // Kosongkan container modal
    document.getElementById('quickview-container').innerHTML = '';
}