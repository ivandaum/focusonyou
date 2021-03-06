import Lazyloading from '../vendor/Lazyloading' // eslint-disable-line no-eval

const Images = {
  lazy: null,
  $container: null,
  lazyload() {
    const offset = 0

    if (!Images.$container) {
      Images.$container = document.querySelector('main')
    }

    Images.lazy = new Lazyloading({
      container: Images.$container,
      load_delay: 0,
      elements_selector: 'img:not(.ignore-lazy)',
      thresholds: `${offset}px 0px ${offset}px 0px`,
      callback_enter: () => {},
      callback_loaded: (el) => Images.onLoad(el),
      callback_error: (el) => {
        console.log('Error loading : ', el)
        Images.onLoad(el)
      },
    })
  },

  onLoad(el) {
    el.parentNode.classList.add('loaded')
  },
}

export default Images
