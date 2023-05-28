import SassyModal from './plugins/SassyModal';

// Custon Js Files
require('../../assets/js/ecommvc');
require('../../assets/js/front/navbar');
require('../../assets/js/admin/update');
require('../../assets/js/init');

const sassyModal = new SassyModal({
    blur: true,
    centered: true,
    animation: 'fade-in',
    showModalCSS: 'show-modal'
});
