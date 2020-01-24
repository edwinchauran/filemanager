// srca
const express = require('express');
const router = express.Router();

router.get('/imagenes', (req, res) => {
    res.render('files/archivos');
});
module.exports = router;