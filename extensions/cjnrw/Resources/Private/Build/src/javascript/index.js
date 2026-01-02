var scrollPosition = window.scrollY
var headerContainer = document.getElementById('head')
if (scrollPosition >= 10) {
    headerContainer.classList.add('sticky-top')
    headerContainer.classList.add('minify')
} else {
    headerContainer.classList.remove('sticky-top')
    headerContainer.classList.remove('minify')
}
window.addEventListener('scroll', function() {
    scrollPosition = window.scrollY
    if (scrollPosition >= 1) {
        headerContainer.classList.add('sticky-top')
        headerContainer.classList.add('minify')
    } else {
        headerContainer.classList.remove('sticky-top')
        headerContainer.classList.remove('minify')
    }
})

let particleElements = document.querySelectorAll('.bg-particle')
for (var i = 0, n = particleElements.length; i < n; ++i) {
    const rotate = particleElements[i].getAttribute('data-rotate')
    let style =  window.getComputedStyle(particleElements[i])
    let matrix =  new WebKitCSSMatrix(style.transform);
    particleElements[i].style.transform = matrix;
    particleElements[i].style.setProperty('transform', particleElements[i].style.transform + ' rotate('+rotate+'deg)','important');
}

// Scroll to first invalid form field after page load
const firstInvalidField = document.querySelector('.is-invalid')
if (firstInvalidField) {
    // Small delay to ensure page is fully loaded and browser anchor scroll is done
    setTimeout(() => {
        firstInvalidField.scrollIntoView({ behavior: 'smooth', block: 'center' })
        const input = firstInvalidField.querySelector('input, select, textarea') || firstInvalidField
        input.focus()
    }, 100)
}
