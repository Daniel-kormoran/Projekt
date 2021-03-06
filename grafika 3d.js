var createScene = function () {
    // This creates a basic Babylon Scene object (non-mesh)
    var scene = new BABYLON.Scene(engine);

    // This creates and positions a free camera (non-mesh)
    var camera = new BABYLON.FreeCamera("camera1", new BABYLON.Vector3(0, 5, -10), scene);

    // This targets the camera to scene origin
    camera.setTarget(BABYLON.Vector3.Zero());

    // This attaches the camera to the canvas
    camera.attachControl(canvas, true);

    // This creates a light, aiming 0,1,0 - to the sky (non-mesh)
    var light = new BABYLON.DirectionalLight("Right light", new BABYLON.Vector3(1, 0, -0.1), scene);

    // Default intensity is 1. Let's dim the light a small amount
    light.intensity = 1.1;
    
    // This creates a light, aiming 0,1,0 - to the sky (non-mesh)
    var light1 = new BABYLON.DirectionalLight("Leftlight", new BABYLON.Vector3(-1, 0, -0.1), scene);

    // Default intensity is 1. Let's dim the light a small amount
    light1.intensity = 1.1;

    // Our built-in 'sphere' shape.
    var sphere = BABYLON.MeshBuilder.CreateSphere("sphere", {diameter: 2, segments: 32}, scene);

    // Move the sphere upward 1/2 its height
    sphere.position.y = 1;

    // Our built-in 'ground' shape.
    var ground = BABYLON.MeshBuilder.CreateGround("ground", {width: 6, height: 6}, scene);

//GUI
   var myGUI = BABYLON.GUI.AdvancedDynamicTexture.CreateFullscreenUI("UI");


   var panel = new BABYLON.GUI.StackPanel();
	panel.width = "210px";
	panel.isVertical = true;
    panel.horizontalAlignment = BABYLON.GUI.Control.HORIZONTAL_ALIGNMENT_LEFT;
    panel.verticalAlignment = BABYLON.GUI.Control.VERTICAL_ALIGNMENT_CENTER;    
    myGUI.addControl(panel);
// Left light  
   var panelLeftlight = new BABYLON.GUI.StackPanel();
	panelLeftlight.width = "150px";
	panelLeftlight.height = "25px";
	panelLeftlight.isVertical = false;
    panelLeftlight.horizontalAlignment = BABYLON.GUI.Control.HORIZONTAL_ALIGNMENT_LEFT;
    panelLeftlight.verticalAlignment = BABYLON.GUI.Control.VERTICAL_ALIGNMENT_CENTER;    
    panel.addControl(panelLeftlight);

   var checkboxLeftLight = new BABYLON.GUI.Checkbox();
    checkboxLeftLight.width = "20px";
    checkboxLeftLight.height = "20px";
    checkboxLeftLight.isChecked = true;
    checkboxLeftLight.color = "green";
      checkboxLeftLight.onIsCheckedChangedObservable.add(function(value) {
        if (value) {
            checkboxLeftLight.color = "green";
			light.setEnabled(true);
        }
		else {
            checkboxLeftLight.color = "red";
			light.setEnabled(false);
			
		}
    });
 	
 panelLeftlight.addControl(checkboxLeftLight); 

    var textLeftlight= new BABYLON.GUI.TextBlock();
    textLeftlight.text = "Left Light";
    textLeftlight.width = "180px";
    textLeftlight.paddingLeft = "10px";
    textLeftlight.textHorizontalAlignment = BABYLON.GUI.Control.HORIZONTAL_ALIGNMENT_LEFT;
    textLeftlight.color = "white";
    panelLeftlight.addControl(textLeftlight); 

// Right light  
 var panelRightlight = new BABYLON.GUI.StackPanel();
	panelRightlight.width = "150px";
	panelRightlight.height = "25px";
	panelRightlight.isVertical = false;
    panelRightlight.horizontalAlignment = BABYLON.GUI.Control.HORIZONTAL_ALIGNMENT_LEFT;
    panelRightlight.verticalAlignment = BABYLON.GUI.Control.VERTICAL_ALIGNMENT_CENTER;    
    panel.addControl(panelRightlight);

   var checkboxRightLight = new BABYLON.GUI.Checkbox();
    checkboxRightLight.width = "20px";
    checkboxRightLight.height = "20px";
    checkboxRightLight.isChecked = true;
    checkboxRightLight.color = "green";
    checkboxRightLight.onIsCheckedChangedObservable.add(function(value) {
        if (value) {
            checkboxRightLight.color = "green";
			light1.setEnabled(true);
        }
		else {
            checkboxRightLight.color = "red";
			light1.setEnabled(false);
			
		}
    });
 	
 	panelRightlight.addControl(checkboxRightLight); 

    var textRightlight= new BABYLON.GUI.TextBlock();
    textRightlight.text = "Right Light";
    textRightlight.width = "180px";
    textRightlight.paddingLeft = "10px";
    textRightlight.textHorizontalAlignment = BABYLON.GUI.Control.HORIZONTAL_ALIGNMENT_LEFT;
    textRightlight.color = "white";
    panelRightlight.addControl(textRightlight); 
   

    return scene;