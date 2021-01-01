<div class="page-header">
    <h1>myITS-Academics</h1>
</div>

<a-scene>
    <a-assets>
        <img id="boxTexture" src="https://i.imgur.com/mYmmbrp.jpg">
        <img id="skyTexture"
          src="https://cdn.aframe.io/360-image-gallery-boilerplate/img/sechelt.jpg">
    </a-assets>
  
    <!-- Out of the box environment! -->
    <a-entity environment="preset: forest; dressingAmount: 500"></a-entity>
    <a-sky color="#222"></a-sky>

    <a-entity text__welcome="align: center; color: #000366; value: Selamat Datang, Yemima!" id="welcome">
        <a-entity text__welcome="align: center; color: #000366; value: Selamat Datang, Yemima!; width: 1.54" id="welcometext" scale="1.15 4.25 1" position="-1.156 3.47771 -2.72679"></a-entity>
    </a-entity>

    <!-- main page -->
    <a-entity id="matkul" geometry="depth: 0.2; height: 1.97; width: 3.42" position="0.09 2.18 -2.69" material="color: #ffffff; emissive: #ffffff">
        <a-entity id="matkul_title" text__matkul="align: center; color: #000000; value: Mata Kuliah; width: 3.5" position="0 0.7 0.1"></a-entity>        
        <a-entity id="MK" geometry="depth: 0.28; height: 0.68; width: 7.25" position="0.03286 0.2556 0.09912" material="color: #9eaeff; emissive: #1841a0" scale="0.4 0.4 0.4">
            <a-entity id="kodeMK" text__kodemk="align: center; value: IF184502; width: 6" position="-2.77408 0 0.15"></a-entity>
            <a-entity id="mk" text__kodemk="align: center; value: Grafika Komputer; width: 6" position="-0.75656 0 0.15" scale=""></a-entity>
            <a-entity id="kelas" text__kodemk="align: center; value: A; width: 6" position="0.89668 0 0.15"></a-entity>
        </a-entity>
        <a-entity id="tambahButton" geometry="depth: 0.28; height: 0.5; width: 1.19" position="1.19 0.26 0.1" material="color: #1700c7" scale="0.4 0.4 0.4">
            <a-entity id="tambah" text__tambah="align: center; value: Tambah; width: 6" position="0 0 0.15"></a-entity>
        </a-entity>
    </a-entity>

    <a-entity id="menu" menu="" position="0 1.5 -0.5" rotation="-45 0 0" event-manager="" visible="false">
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
        <a-entity geometry="width: 0.6; height: 0.4; depth: 0.01" material="color: gray" position="0 0 -0.025"></a-entity></a-entity>

<!-- another page -->
    <a-entity id="studyplan" geometry="depth: 0.2; height: 1.97; width: 3.42" position="5 2.18 -2.69" material="color: #ffffff; emissive: #ffffff">
        <a-entity id="studyplan_title" text__matkul="align: center; color: #000000; value: Formulir Rencana Studi; width: 3.5" position="0 0.7 0.1"></a-entity> 
        <a-entity id="MK" geometry="depth: 0.28; height: 0.68; width: 7.25" position="0.02556 0.24992 0.05452" material="color: #9eaeff; emissive: #a62626" scale="0.4 0.4 0.4">
            <a-entity id="kodeMK" text__kodemk="align: center; value: IF184502; width: 6" position="-2.78871 0 0.15"></a-entity>
            <a-entity id="mk" text__kodemk="align: center; value: Grafika Komputer; width: 6" position="-0.79689 0 0.15" scale=""></a-entity>
            <a-entity id="kelas" text__kodemk="align: center; value: A; width: 6" position="0.94648 0 0.15"></a-entity>
        </a-entity>
        <a-entity id="dropButton" geometry="depth: 0.28; height: 0.5; width: 0.98" position="1.1843 0.25059 0.08327" material="color: #1700c7; emissive: #ff0000" scale="0.4 0.4 0.4">
            <a-entity id="drop" text__tambah="align: center; value: Drop; width: 6" position="0 0 0.15"></a-entity><a-entity id="drop-2" text__tambah="align: center; value: Drop; width: 6" position="0 0 0.15"></a-entity><a-entity id="drop-3" text__tambah="align: center; value: Drop; width: 6" position="0 0 0.15"></a-entity>
        </a-entity>
    </a-entity>
    
</a-scene>

<!-- hex biru: #1167b1 -->
<!-- hex krem: #ffce3f -->