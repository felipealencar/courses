async function findFaces() {
    const model = await blazeface.load();  
    const img = document.querySelector("img");
    const predictions = await model.estimateFaces(img, false);
    if (predictions.length > 0) {
        console.log(predictions);
        document.getElementById("status").innerText = "Rosto Encontrado!";
        const canvas = document.getElementById("canvas");
        canvas.width = img.width;
        canvas.height = img.height;
        const ctx = canvas.getContext("2d");
        ctx.fillStyle = "rgba(250,225,6,0.5)";
        for (let i = 0; i < predictions.length; i++) {
          const start = predictions[i].topLeft;
          const end = predictions[i].bottomRight;
          const size = [end[0] - start[0], end[1] - start[1]];
          ctx.fillRect(start[0], start[1], size[0], size[1]);
        }
      } else {
        document.getElementById("status").innerText = "Nenhum rosto encontrado!";
      }
}
findFaces();