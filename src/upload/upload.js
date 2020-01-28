const express = require("express");
const path = require("path");
const bodyParser = require("body-parser");
const multer = require("multer");
const app = express();
//Upload
app.use(bodyParser.json());
var storage = multer.diskStorage({
  destination: function(req, file, cb) {
    //lugar donde se van a guardar
    if (
      file.mimetype === "image/png" ||
      file.mimetype === "image/jpeg" ||
      file.mimetype === "image/jpg" ||
      file.mimetype === "image/gif" ||
      file.mimetype === "image/JPG" ||
      file.mimetype === "image/jpeg"
    ) {
      cb(null, path.join(__dirname, "/public/files/images"));
    } else if (
      file.mimetype === "video/mp4" ||
      file.mimetype === "video/ogg" ||
      file.mimetype === "video/webm" ||
      file.mimetype === "video/ogv"
    ) {
      cb(null, path.join(__dirname, "/public/files/videos"));
    } else {
      cb(null, path.join(__dirname, "/public/files/otros"));
    }
  },
  filename: function(req, file, cb) {
    cb(null, file.originalname + path.extname(file.originalname));
  }
});
var upload = multer({ storage: storage }).array("file", 1000);
app.post("/", (req, res) => {
  upload(req, res, err => {
    var msg;
    if (err) {
      msg = `
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>¡Archivo(s) no subido(s)</strong> Notifique al administrador!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            `;
    } else {
      msg = `
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>¡Archivo(s) Subido(s)!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
             `;
    }
    res.render("index", { msg });
    //   console.log(req.body);
    //   console.log(req.files);
    //   if(err) {
    //       return res.end("Error uploading file. " + err);
    //   }
    //   res.end("File is uploaded");
  });
});
module.exports = { storage, upload };
