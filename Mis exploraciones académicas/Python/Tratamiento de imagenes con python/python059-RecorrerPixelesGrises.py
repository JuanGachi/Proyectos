from PIL import Image

imagen = Image.open("nelo4.png")
pixeles = imagen.load()
print(imagen.size)

print(pixeles[0,0])

altura = imagen.size[1]
anchura = imagen.size[0]

for x in range(0,anchura):
    for y in range(0,altura):
        rojo = pixeles[x,y][0]
        verde = pixeles[x,y][1]
        azul = pixeles[x,y][2]

        rojo = rojo
        verde = rojo
        azul = rojo

        pixeles[x,y] = (rojo,verde,azul)



imagen.save("neloguardado4.png")
