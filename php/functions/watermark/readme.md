# Wasserzeichen auf Bildern mit PHP hinzufügen

Dieses PHP-Skript zeigt, wie man ein Wasserzeichen auf ein Bild anwendet. Es enthält eine Funktion `watermark_image()`, die das Zielbild und das Wasserzeichenbild verwendet, um das Wasserzeichen auf das Bild anzuwenden und das resultierende Bild zu speichern.

## Verwendung

1. Geben Sie den Pfad zum Zielbild an, auf das das Wasserzeichen angewendet werden soll.
2. Geben Sie den Pfad zum Wasserzeichenbild an.
3. Geben Sie den Pfad und den Namen für das neue Bild an, das das Wasserzeichen enthalten soll.
4. Das Skript verwendet die `imagecreatefrompng()`- und `imagecreatefromjpeg()`-Funktionen, um das Zielbild und das Wasserzeichenbild zu laden.
5. Die Abmessungen des Wasserzeichenbilds und des Zielbilds werden ermittelt.
6. Die Position des Wasserzeichens auf dem Zielbild wird berechnet, um es zentriert zu platzieren.
7. Die `imagecopy()`-Funktion wird verwendet, um das Wasserzeichen auf das Zielbild anzuwenden.
8. Das resultierende Bild wird mit der `imagejpeg()`-Funktion gespeichert.
9. Die temporären Bilder werden freigegeben, um Speicher freizugeben.

Bitte beachten Sie, dass die erforderlichen PHP-GD-Bibliotheken installiert sein müssen, um Bilder zu verarbeiten.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

----

# Adding Watermark to Images with PHP

This PHP script demonstrates how to apply a watermark to an image. It includes a function `watermark_image()` that takes the target image and watermark image as parameters to apply the watermark onto the image and save the resulting image.

## Usage

1. Specify the path to the target image where the watermark should be applied.
2. Specify the path to the watermark image.
3. Specify the path and name for the new image that will contain the watermark.
4. The script uses the `imagecreatefrompng()` and `imagecreatefromjpeg()` functions to load the target image and watermark image.
5. The dimensions of the watermark image and target image are determined.
6. The position of the watermark on the target image is calculated to center it.
7. The `imagecopy()` function is used to apply the watermark onto the target image.
8. The resulting image is saved using the `imagejpeg()` function.
9. The temporary images are destroyed to free up memory.

Please note that the required PHP GD libraries need to be installed to process images.

## License

This project is licensed under the [MIT License](LICENSE).
