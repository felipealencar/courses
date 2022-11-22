const express = require("express");
const router = express.Router();
const animaisController = require("../controllers/animaisController");

router.get("/", animaisController.list);
router.get("/show/:animalId/", animaisController.show);
router.get("/create/", animaisController.create);
router.post("/create/", animaisController.create);
router.post("/:animalId/update", animaisController.update);
router.get("/:animalId/update", animaisController.update);
router.get("/:animalId/delete", animaisController.delete);

module.exports = router;