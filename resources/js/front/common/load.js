module.exports = {

    init()
    {
        // this.initAjax();
        $(this.onDOMLoad.bind(this));
    },

    initAjax()
    {
        $.ajaxSetup({
            header: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
        });
    },

    onDOMLoad()
    {
        this.setStickynav();
        this.setOnePageNav();
        this.setOnePageNavMobile();
    },

    setStickynav() {

    },

    setOnePageNav()
    {
        $('#nav-desktop').singlePageNav({
            offset: 100,
            currentClass: 'active',
            filter: ':not(.ignore)'
        });
    },

    setOnePageNavMobile()
    {
        $('#mobile-menu').singlePageNav({
            offset: 100,
            currentClass: 'active',
            filter: ':not(.ignore)'
        });
    },
}
