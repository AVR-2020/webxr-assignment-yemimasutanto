console.log("Js kebaca woy");

AFRAME.registerComponent('daftar-matkul', {
    schema: {
        id: {type: 'string'},
        name: {type: 'string'},
        sks: {type: 'int'}
    },

    init: function () {
        this.el.addEventListener('click', function () {
            console.log("Sedang menambah matkul");
        });
    },

    update: function () {
      // Do something when component's data is updated.
    },

    remove: function () {
      // Do something the component or its entity is detached.
    },

    tick: function (time, timeDelta) {
      // Do something on every scene tick or frame.
    }
});

AFRAME.registerComponent('drop-matkul', {
    schema: {
        id: {type: 'string'},
        name: {type: 'string'},
        sks: {type: 'int'}
    },

    init: function () {
        this.el.addEventListener('click', function () {
            console.log("Sedang drop matkul");
        });
    },

    update: function () {
      // Do something when component's data is updated.
    },

    remove: function () {
      // Do something the component or its entity is detached.
    },

    tick: function (time, timeDelta) {
      // Do something on every scene tick or frame.
    }
});

