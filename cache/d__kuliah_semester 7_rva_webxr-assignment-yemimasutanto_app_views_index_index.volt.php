<div class="page-header">
    <h1>myITS-Academics</h1>
</div>

<a-scene>
    <a-assets>
        <img id="boxTexture" src="https://i.imgur.com/mYmmbrp.jpg">
        <img id="skyTexture" src="https://cdn.aframe.io/360-image-gallery-boilerplate/img/sechelt.jpg">
        <img id="logout-icon" src="img/logout.png">
        <img id="app-logo" src="img/myits-academics-blue.png">
    </a-assets>
  
    <!-- Out of the box environment! -->
    <a-entity environment="preset: forest; dressingAmount: 500"></a-entity>
    <a-sky color="#222"></a-sky>

    <a-camera
        position="0 2 0"
        wasd-controls
        look-controls="pointerLockEnabled: true"
        aframe-injected
        data-aframe-inspector-original-camera>
        <a-cursor></a-cursor>
    </a-camera>

    <a-image
        src="#app-logo"
        geometry="width: 1.876"
        id="myits-logo"
        position="0 5 -3"
        scale="2 2 2"
        rotation="30 0 0"
    ></a-image>

    <a-entity
        text__welcome="
            align: center;
            color: #000066;
            value: Selamat Datang, Yemima!;
            width: 6;
        "
        id="welcome"
        position="0 3.5 -3"
    ></a-entity>

    <!-- Logout -->
    <a-cylinder position="0 0.4 -2.2" geometry="height: 0.2; radius: 0.3" color="#ff0000" rotation="60 0 0">
        <a-image src="#logout-icon" rotation="-90 0 0" scale="0.3 0.3 0.3" position="0 0.12 0"></a-image>
    </a-cylinder>

    <!-- main page -->
    <a-entity
        id="matkul"
        geometry="depth: 0.2; height: 2.5; width: 5"
        position="-2.6 1.75 -3"
        material="color: #ffffff; emissive: #ffffff">
        <a-entity
            id="matkul_title"
            text__matkul="
                align: center;
                color: #000000;
                value: Mata Kuliah;
                width: 3.5;
            "
            position="0 1 0.1"
        ></a-entity>

        <a-entity id="mk-header" geometry="depth: 0.1; height: 0.3; width: 4.6" position="0.03 0.6 0.1" material="color: #1700c7">
            <a-entity id="kodeMK" text__kodemk="value: KODE; width: 2.5" position="-0.9 0 0.05"></a-entity>
            <a-entity id="namaMK" text__namamk="value: NAMA MATA KULIAH; width: 2.5" position="-0.28 0 0.05"></a-entity>
            <a-entity id="sksMK" text__sks="align: center; value: SKS; width: 2.5" position="1.3 0 0.05"></a-entity>
        </a-entity>
        
        <?php $ypos = 0.25; ?>
        <?php foreach ($courses as $course) { ?>
            <a-entity geometry="depth: 0.1; height: 0.3; width: 4.6" position="0.03 <?= $ypos ?> 0.1" material="color: #9eaeff; emissive: #1841a0">
                <a-entity id="kodeMK" text__kodemk="value: <?= $course->id ?>; width: 2.5" position="-0.9 0 0.05"></a-entity>
                <a-entity id="namaMK" text__namamk="value: <?= $course->name ?>; width: 2.5" position="-0.28 0 0.05"></a-entity>
                <a-entity id="sksMK" text__sks="align: center; value: <?= $course->sks ?>; width: 2.5" position="1.3 0 0.05"></a-entity>
                <a-entity id="tambahButton" geometry="depth: 0.1; height: 0.2; width: 0.5" position="1.9 0 0.05" material="color: #1700c7" daftar-matkul="id: <?= $course->id ?>; name: <?= $course->name ?>; sks: <?= $course->sks ?>">
                    <a-entity id="tambah" text__tambah="align: center; value: Tambah; width: 2.5" position="0 0 0.05"></a-entity>
                </a-entity>
            </a-entity>
            <?php $ypos -= 0.35; ?>
        <?php } ?>
        
    </a-entity>

    <!-- another page -->
    <a-entity id="frs" geometry="depth: 0.2; height: 2.5; width: 5" position="2.6 1.75 -3" material="color: #ffffff; emissive: #ffffff">
        <a-entity id="frs_title" text__matkul="align: center; color: #000000; value: Formulir Rencana Studi; width: 3.5" position="0 1 0.1"></a-entity>        

        <a-entity id="frs-header" geometry="depth: 0.1; height: 0.3; width: 4.6" position="0.03 0.6 0.1" material="color: #ff0000">
            <a-entity id="kodeFRS" text__kodeFRS="value: KODE; width: 2.5" position="-0.9 0 0.05"></a-entity>
            <a-entity id="namaFRS" text__namaFRS="value: NAMA MATA KULIAH; width: 2.5" position="-0.28 0 0.05"></a-entity>
            <a-entity id="sksFRS" text__sks="align: center; value: SKS; width: 2.5" position="1.3 0 0.05"></a-entity>
        </a-entity>
        
        <?php $ypos = 0.25; ?>
        <?php foreach ($studyplans as $studyplan) { ?>
            <a-entity geometry="depth: 0.1; height: 0.3; width: 4.6" position="0.03 <?= $ypos ?> 0.1" material="color: #9eaeff; emissive: #a62626">
                <a-entity id="kodeFRS" text__kodeFRS="value: <?= $studyplan->course_id ?>; width: 2.5" position="-0.9 0 0.05"></a-entity>
                <a-entity id="namaFRS" text__namaFRS="value: <?= $studyplan->course_name ?>; width: 2.5" position="-0.28 0 0.05"></a-entity>
                <a-entity id="sksFRS" text__sks="align: center; value: <?= $studyplan->course_sks ?>; width: 2.5" position="1.3 0 0.05"></a-entity>
                <a-entity id="dropButton" geometry="depth: 0.1; height: 0.2; width: 0.5" position="1.9 0 0.05" material="color: #ff0000" drop-matkul="id: <?= $studyplan->course_id ?>; name: <?= $studyplan->course_name ?>; sks: <?= $studyplan->course_sks ?>">
                    <a-entity id="drop" text__drop="align: center; value: Drop; width: 2.5" position="0 0 0.05"></a-entity>
                </a-entity>
            </a-entity>
            <?php $ypos -= 0.35; ?>
        <?php } ?>
    </a-entity>

        
    
    <!-- <a-entity
        id="menu"
        position="0 1.5 -0.5"
        rotation="-45 0 0"
        visible="false">
        <a-entity slider="" position="0 0.1 0"><a-entity geometry="height: 0.01; width: 0.5; depth: 0.01" material="color: white"></a-entity><a-entity geometry="primitive: cylinder; radius: 0.02; height: 0.05" material="color: #3a50c5" pinchable="pinchDistance: 0.05" rotation="90 0 0" color-change=""></a-entity></a-entity>
        <a-entity
            id="sphereButton"
            button="label: sphere"
            position="-0.15 0 0"
            geometry="width: 0.11; height: 0.05; depth: 0.04"
            material="color: #3a50c5"
            pressable="">
            <a-entity
                position="0 0 0.02"
                text="value: sphere; color: white; align: center"
                scale="0.75 0.75 0.75"
            ></a-entity>
        </a-entity>
        <a-entity id="boxButton" button="label: box" position="" geometry="width: 0.11; height: 0.05; depth: 0.04" material="color: green" pressable=""><a-entity position="0 0 0.02" text="value: box; color: white; align: center" scale="0.75 0.75 0.75"></a-entity></a-entity>
        <a-entity id="torusButton" button="label: torus" position="0.15 0 0" geometry="width: 0.11; height: 0.05; depth: 0.04" material="color: #3a50c5" pressable=""><a-entity position="0 0 0.02" text="value: torus; color: white; align: center" scale="0.75 0.75 0.75"></a-entity></a-entity>
        <a-entity id="darkModeButton" button="label: Dark Mode; width: 0.2; toggable: true" position="0 -0.1 0" geometry="width: 0.2; height: 0.05; depth: 0.04" material="color: #3a50c5" pressable=""><a-entity position="0 0 0.02" text="value: Dark Mode; color: white; align: center" scale="0.75 0.75 0.75"></a-entity></a-entity>
        <a-entity geometry="width: 0.6; height: 0.4; depth: 0.01" material="color: gray" position="0 0 -0.025"></a-entity>
    </a-entity> -->
</a-scene>

<!-- hex biru: #1167b1 -->
<!-- hex krem: #ffce3f -->