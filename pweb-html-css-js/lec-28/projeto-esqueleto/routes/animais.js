const express = require("express");
const router = express.Router();
const animaisController = require("../controllers/animaisController");

router.get("/", animaisController.list);
router.get("/:animalId", animaisController.show);
router.post("/", animaisController.create);
router.patch("/:animalId", animaisController.update);
router.delete("/:animalId", animaisController.delete);

module.exports = router;