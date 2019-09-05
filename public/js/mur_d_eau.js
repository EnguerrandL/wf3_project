var app;

$(function() {
    $("#btnScroll").on("click", function(e) {
        e.preventDefault();
        $("html, body").animate(
            { scrollTop: $($(this).attr("href")).offset().top },
            500,
            "linear"
        );
    });
});

function initPixi() {
    app = new PIXI.Application({ width: 1387, height: 751 });
    document.getElementsByClassName("distorsion")[0].appendChild(app.view);
    var image = new PIXI.Sprite.from("./img/zen.jpg");
    image.width = 1387;
    image.height = 751;
    app.stage.addChild(image);
    displacementSprite = new PIXI.Sprite.from(
        "./img/dmaps/2048x2048/fibers.jpg"
    );
    displacementFilter = new PIXI.filters.DisplacementFilter(
        displacementSprite
    );
    displacementSprite.texture.baseTexture.wrapMode = PIXI.WRAP_MODES.REPEAT;
    app.stage.addChild(displacementSprite);
    app.stage.filters = [displacementFilter];
    app.renderer.plugins.interaction.autoPreventDefault = false;
    app.renderer.view.style.touchAction = "auto";
    app.renderer.view.style.objectFit = "cover";
    app.renderer.view.style.width = "100%";
    app.renderer.view.style.height = "100%";
    app.renderer.view.style.top = "50%";
    app.renderer.view.style.left = "50%";
    // app.renderer.view.style.position = "absolute";
    // app.renderer.view.style.display = "block";
    // app.renderer.autoDensity = true;
    // app.renderer.resize(window.innerWidth, window.innerHeight);
    app.renderer.view.style.webkitTransform =
        "translate( -50%, -50% ) scale(1.0)";
    app.renderer.view.style.transform = "translate( -50%, -50% ) scale(1.0)";
    displacementSprite.scale.x = 4;
    //4
    displacementSprite.scale.y = 20;
    //12
    animate();
}
function animate() {
    displacementSprite.x += 0;
    //0
    displacementSprite.y += 12;
    //12
    requestAnimationFrame(animate);
}

initPixi();
