import tkinter as tk
# from pyfirmata import Arduino, util
global x
x = 0


def dforward():
    global x
    print(x)
    #board.digital[13].write(x)
    #board2.digital[13].write(x)
    x = x+1
    if x > 3:
        x = 1
def dright():
    global x
    print(x)
    #board2.digital[13].write(x)
    x = x+1
    if x > 3:
        x = 1
def dleft():
    global x
    print(x)
    #board.digital[13].write(x)
    x = x+1
    if x > 3:
        x = 1
def dback():
    global x
    print(x)
    #board.digital[13].write(x)
    #board2.digital[13].write(x)
    x = x+1
    if x > 3:
        x = 1

window = tk.Tk()


window.config(height=600, width=600)

leftButton = tk.Button(command=dleft, text="left")
leftButton.config(height=4, width=8)
leftButton.place(x=270, y=280)


rightButton = tk.Button(command=dright, text="right")
rightButton.config(height=4, width=8)
rightButton.place(x=350, y=280)


forwardButton = tk.Button(command=dforward, text="forward")
forwardButton.config(height=4, width=8)
forwardButton.place(x=310, y=200)

backButton = tk.Button(command=dback, text="back")
backButton.place(x=310, y=360)
backButton.config(height=4, width=8)

window.bind('<Left>', lambda event: dleft())
window.bind('<Up>', lambda event: dforward())
window.bind('<Right>', lambda event: dright())
window.bind('<Down>', lambda event: dback())






window.mainloop()
