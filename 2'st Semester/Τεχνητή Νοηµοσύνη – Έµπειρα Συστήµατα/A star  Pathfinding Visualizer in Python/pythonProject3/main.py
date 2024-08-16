import pygame
import math
from queue import PriorityQueue

pygame.init()
WIDTH = 800
window_gap = 200
WIN = pygame.display.set_mode((WIDTH, WIDTH+window_gap))
pygame.display.set_caption("A* Path Finding Algorithm")
ROWS = 50

RED = (255, 0, 0)
GREEN = (0, 255, 0)
BLUE = (0, 255, 0)
YELLOW = (255, 255, 0)
WHITE = (255, 255, 255)
BLACK = (0, 0, 0)
PURPLE = (128, 0, 128)
ORANGE = (255, 165 ,0)
GREY = (128, 128, 128)
TURQUOISE = (64, 224, 208)
MAGENTA	= (255,0,255)
PURPLE = (128,0,128)
color = (255,0,0)
BEIGE = (245,245,220)
color = (255, 255, 255)
color_light = (170, 170, 170)
color_dark = (100, 100, 100)

midnightblue = (25,25,112)

navy = (0,0,128)
blue = (0,0,255)
deepskyblue = (0,191,255)
skyblue = (135,206,235)

firebrick = (255,22,22)
crimson = (255,66,66)
indianred = (255,135,135)
lightcoral = (255,175,175)

font = pygame.font.SysFont('arial', 30)
BTN_SIZE = 120
surf = font.render('Start', True, 'white')
button_start = pygame.Rect(10, 30, BTN_SIZE , 60)
button_end = pygame.Rect(10 + (10 + BTN_SIZE), 30, BTN_SIZE, 60)
button_wall = pygame.Rect(10 + 2 * (10 + BTN_SIZE), 30, BTN_SIZE, 60)
button_magnet_pos = pygame.Rect(10 + 3 * (10 + BTN_SIZE), 30, BTN_SIZE, 60)
button_magnet_neg = pygame.Rect(10 + 4 * (10 + BTN_SIZE), 30, BTN_SIZE, 60)
button_magnet_clear = pygame.Rect(10 + 5 * (10 + BTN_SIZE), 30, BTN_SIZE, 60)
button_run = pygame.Rect(10 + 4 * (10 + BTN_SIZE), 120, BTN_SIZE, 60)
button_quit = pygame.Rect(10 + 5 * (10 + BTN_SIZE), 120, BTN_SIZE, 60)
selected_property = ""

w_score = []
index = 10

class Spot:
	def __init__(self, row, col, width, total_rows):
		self.row = row
		self.col = col
		self.x = row * width
		self.y = col * width+window_gap
		self.color = WHITE
		self.neighbors = []
		self.weight = 1
		self.width = width
		self.total_rows = total_rows

	def get_pos(self):
		return self.row, self.col

	def is_closed(self):
		return self.color == RED

	def is_open(self):
		return self.color == GREEN

	def is_barrier(self):
		return self.color == BLACK

	def is_start(self):
		return self.color == ORANGE

	def is_end(self):
		return self.color == TURQUOISE

	def is_magnet_poss(self):
		return self.color == midnightblue

	def is_magnet_neg(self):
		return self.color == RED

	def reset(self):
		self.color = WHITE

	def make_start(self):
		self.color = ORANGE

	def make_closed(self):
		self.color = RED

	def make_open(self):
		self.color = GREEN

	def make_barrier(self):
		self.color = BLACK

	def make_end(self):
		self.color = TURQUOISE

	def make_magnet_poss(self):
		self.color = midnightblue

	def make_magnet_neg(self):
		self.color = RED

	def make_path(self):
		self.color = PURPLE

	def draw(self, win):
		pygame.draw.rect(win, self.color, (self.x, self.y , self.width, self.width))

	def update_neighbors(self, grid):
		self.neighbors = []
		if self.row < self.total_rows - 1 and not grid[self.row + 1][self.col].is_barrier(): # DOWN
			self.neighbors.append(grid[self.row + 1][self.col])

		if self.row > 0 and not grid[self.row - 1][self.col].is_barrier(): # UP
			self.neighbors.append(grid[self.row - 1][self.col])

		if self.col < self.total_rows - 1 and not grid[self.row][self.col + 1].is_barrier(): # RIGHT
			self.neighbors.append(grid[self.row][self.col + 1])

		if self.col > 0 and not grid[self.row][self.col - 1].is_barrier(): # LEFT
			self.neighbors.append(grid[self.row][self.col - 1])

	def __lt__(self, other):
		return False


def h(p1, p2):
	x1, y1 = p1
	x2, y2 = p2
	return abs(x1 - x2) + abs(y1 - y2)


def reconstruct_path(came_from, current, draw):
	while current in came_from:
		current = came_from[current]
		current.make_path()
		draw()


def algorithm(draw, grid, start, end):
	count = 0
	open_set = PriorityQueue()
	open_set.put((0, count, start))
	came_from = {}
	g_score = {spot: float("inf") for row in grid for spot in row}
	g_score[start] = 0
	f_score = {spot: float("inf") for row in grid for spot in row}
	f_score[start] = h(start.get_pos(), end.get_pos())
	open_set_hash = {start}

	while not open_set.empty():
		for event in pygame.event.get():
			if event.type == pygame.QUIT:
				pygame.quit()

		current = open_set.get()[2]
		open_set_hash.remove(current)

		if current == end:
			reconstruct_path(came_from, end, draw)
			end.make_end()
			return True

		for neighbor in current.neighbors:
			temp_g_score = g_score[current] + 1

			if temp_g_score < g_score[neighbor]:
				came_from[neighbor] = current
				g_score[neighbor] = temp_g_score
				f_score[neighbor] = temp_g_score + w_score[neighbor] * h(neighbor.get_pos(), end.get_pos())
				if neighbor not in open_set_hash:
					count += 1
					open_set.put((f_score[neighbor], count, neighbor))
					open_set_hash.add(neighbor)
					neighbor.make_open()

		draw()

		if current != start:
			current.make_closed()

	return False


def make_grid(rows, width):
	grid = []
	gap = width // rows
	for i in range(rows):
		grid.append([])
		for j in range(rows):
			spot = Spot(i, j, gap, rows)
			grid[i].append(spot)
	global w_score
	w_score = {spot: 1 for row in grid for spot in row}
	return grid


def draw_grid(win, rows, width):
	gap = width // rows
	for i in range(rows):
		pygame.draw.line(win, GREY, (0, window_gap+ i * gap), (width,window_gap+ i * gap))
		for j in range(rows):
			pygame.draw.line(win, GREY, (j * gap, window_gap), (j * gap, window_gap+ width))


def draw(win, grid, rows, width):
	win.fill(BEIGE)
	BTN_SIZE = 120
	for row in grid:
		for spot in row:
			spot.draw(win)
	a,b = pygame.mouse.get_pos()
	draw_grid(win, rows, width)
	#---------------------------------#
	surf = font.render('Start', True, 'white')
	if button_start.x <= a <= button_start.x + 120 and button_start.y <= b <= button_start.y + 60:
		pygame.draw.rect(win,PURPLE,button_start)
	else:
		pygame.draw.rect(win,MAGENTA,button_start)
	win.blit(surf,(button_start.x +40,button_start.y+10))
	#---------------------------------#
	surf = font.render('End', True, 'white')
	if button_end.x <= a <= button_end.x + 120 and button_end.y <= b <= button_end.y + 60:
		pygame.draw.rect(win,PURPLE,button_end)
	else:
		pygame.draw.rect(win,MAGENTA,button_end)
	win.blit(surf,(button_end.x +40,button_end.y+10))
	#---------------------------------#
	surf = font.render('Wall', True, 'white')
	if button_wall.x <= a <= button_wall.x + 120 and button_wall.y <= b <= button_wall.y + 60:
		pygame.draw.rect(win,PURPLE,button_wall)
	else:
		pygame.draw.rect(win,MAGENTA,button_wall)
	win.blit(surf,(button_wall.x +40,button_wall.y+10))
	#---------------------------------#
	surf = font.render('Mag pos', True, 'white')
	if button_magnet_pos.x <= a <= button_magnet_pos.x + 120 and button_magnet_pos.y <= b <= button_magnet_pos.y + 60:
		pygame.draw.rect(win,PURPLE,button_magnet_pos)
	else:
		pygame.draw.rect(win,MAGENTA,button_magnet_pos)
	win.blit(surf,(button_magnet_pos.x +20,button_magnet_pos.y+10))
	#---------------------------------#
	surf = font.render('Mag neg', True, 'white')
	if button_magnet_neg.x <= a <= button_magnet_neg.x + 120 and button_magnet_neg.y <= b <= button_magnet_neg.y + 60:
		pygame.draw.rect(win,PURPLE,button_magnet_neg)
	else:
		pygame.draw.rect(win,MAGENTA,button_magnet_neg)
	win.blit(surf,(button_magnet_neg.x +20,button_magnet_neg.y+10))
	#---------------------------------#
	surf = font.render('Clear', True, 'white')
	if button_magnet_clear.x <= a <= button_magnet_clear.x + 120 and button_magnet_clear.y <= b <= button_magnet_clear.y + 60:
		pygame.draw.rect(win,PURPLE,button_magnet_clear)
	else:
		pygame.draw.rect(win,MAGENTA,button_magnet_clear)
	win.blit(surf,(button_magnet_clear.x +20,button_magnet_clear.y+10))
	#---------------------------------#button_magnet_clear
	surf = font.render('Run', True, 'white')
	if button_run.x <= a <= button_run.x + 120 and button_run.y <= b <= button_run.y + 60:
		pygame.draw.rect(win,PURPLE,button_run)
	else:
		pygame.draw.rect(win,MAGENTA,button_run)
	win.blit(surf,(button_run.x +40,button_run.y+10))
	#---------------------------------#
	surf = font.render('Quit', True, 'white')
	if button_quit.x <= a <= button_quit.x + 120 and button_quit.y <= b <= button_quit.y + 60:
		pygame.draw.rect(win,PURPLE,button_quit)
	else:
		pygame.draw.rect(win,MAGENTA,button_quit)
	win.blit(surf,(button_quit.x +40,button_quit.y+10))
	pygame.display.update()

def get_clicked_pos(pos, rows, width):
	gap = width // rows
	y, x = pos
	y=y
	x=x -window_gap
	row = y // gap
	col = x // gap
	return row, col

def make_magnet_pos(grid,x, y):
	global ROWS
	if x < ROWS and y < ROWS:
		w_score[grid[x][y]] = 8
	for i in range(1, 5):
		j = 2 * i
		for k in range(j + 1):
			if x - i + k < ROWS and y - i < ROWS and x - i + k >= 0 and y - i >= 0 and not grid[x - i + k][y - i].is_barrier() and not grid[x - i + k][y - i].is_start() and not grid[x - i + k][y - i].is_end() :
				w_score[grid[x - i + k][y - i]] = 1/i * 8
				if i == 1:
					grid[x - i + k][y - i].color = navy
				elif i == 2:
					grid[x - i + k][y - i].color = blue
				elif i == 3:
					grid[x - i + k][y - i].color = deepskyblue
				elif i == 4:
					grid[x - i + k][y - i].color = skyblue
			if x - i + k < ROWS and y + i < ROWS and x - i + k >= 0  and y + i >= 0 and not grid[x - i + k][y + i].is_barrier() and not grid[x - i + k][y + i].is_start() and not grid[x - i + k][y + i].is_end():
				w_score[grid[x - i + k][y + i]] = 1/i * 8
				if i == 1:
					grid[x - i + k][y + i].color = navy
				elif i == 2:
					grid[x - i + k][y + i].color = blue
				elif i == 3:
					grid[x - i + k][y + i].color = deepskyblue
				elif i == 4:
					grid[x - i + k][y + i].color = skyblue
			if x - i < ROWS and y - i + k < ROWS and x - i >= 0  and y - i + k >= 0 and not grid[x - i][y - i + k].is_barrier() and not grid[x - i][y - i + k].is_start() and not grid[x - i][y - i + k].is_end():
				w_score[grid[x - i][y - i + k]] = 1/i * 8
				if i == 1:
					grid[x - i][y - i + k].color = navy
				elif i == 2:
					grid[x - i][y - i + k].color = blue
				elif i == 3:
					grid[x - i][y - i + k].color = deepskyblue
				elif i == 4:
					grid[x - i][y - i + k].color = skyblue
			if x + i < ROWS and y - i + k < ROWS and x + i >= 0  and y - i + k >= 0 and not grid[x + i][y - i + k].is_barrier() and not grid[x + i][y - i + k].is_start() and not grid[x + i][y - i + k].is_end():
				w_score[grid[x + i][y - i + k]] = 1/i * 8
				if i == 1:
					grid[x + i][y - i + k].color = navy
				elif i == 2:
					grid[x + i][y - i + k].color = blue
				elif i == 3:
					grid[x + i][y - i + k].color = deepskyblue
				elif i == 4:
					grid[x + i][y - i + k].color = skyblue

def make_magnet_neg(grid,x, y):
	global ROWS
	if x < ROWS and y < ROWS:
		w_score[grid[x][y]] = 0.075
	for i in range(1, 5):
		j = 2 * i
		for k in range(j + 1):
			if x - i + k < ROWS and y - i < ROWS and x - i + k >= 0 and y - i >= 0 and not grid[x - i + k][y - i].is_barrier() and not grid[x - i + k][y - i].is_start() and not grid[x - i + k][y - i].is_end() :
				w_score[grid[x - i + k][y - i]] = i * 0.075
				if i == 1:
					grid[x - i + k][y - i].color = firebrick
				elif i == 2:
					grid[x - i + k][y - i].color = crimson
				elif i == 3:
					grid[x - i + k][y - i].color = indianred
				elif i == 4:
					grid[x - i + k][y - i].color = lightcoral
			if x - i + k < ROWS and y + i < ROWS and x - i + k >= 0  and y + i >= 0 and not grid[x - i + k][y + i].is_barrier() and not grid[x - i + k][y + i].is_start() and not grid[x - i + k][y + i].is_end():
				w_score[grid[x - i + k][y + i]] = i * 0.075
				if i == 1:
					grid[x - i + k][y + i].color = firebrick
				elif i == 2:
					grid[x - i + k][y + i].color = crimson
				elif i == 3:
					grid[x - i + k][y + i].color = indianred
				elif i == 4:
					grid[x - i + k][y + i].color = lightcoral
			if x - i < ROWS and y - i + k < ROWS and x - i >= 0  and y - i + k >= 0 and not grid[x - i][y - i + k].is_barrier() and not grid[x - i][y - i + k].is_start() and not grid[x - i][y - i + k].is_end():
				w_score[grid[x - i][y - i + k]] = i * 0.075
				if i == 1:
					grid[x - i][y - i + k].color = firebrick
				elif i == 2:
					grid[x - i][y - i + k].color = crimson
				elif i == 3:
					grid[x - i][y - i + k].color = indianred
				elif i == 4:
					grid[x - i][y - i + k].color = lightcoral
			if x + i < ROWS and y - i + k < ROWS and x + i >= 0  and y - i + k >= 0 and not grid[x + i][y - i + k].is_barrier() and not grid[x + i][y - i + k].is_start() and not grid[x + i][y - i + k].is_end():
				w_score[grid[x + i][y - i + k]] = i * 0.075
				if i == 1:
					grid[x + i][y - i + k].color = firebrick
				elif i == 2:
					grid[x + i][y - i + k].color = crimson
				elif i == 3:
					grid[x + i][y - i + k].color = indianred
				elif i == 4:
					grid[x + i][y - i + k].color = lightcoral

def main(win, width):
	global ROWS
	grid = make_grid(ROWS, width)

	start = None
	end = None
	run = True

	while run:
		draw(win, grid, ROWS, width)
		for event in pygame.event.get():
			if event.type == pygame.QUIT:
				run = False
			if event.type == pygame.MOUSEBUTTONDOWN:
				global selected_property
				if button_start.collidepoint(event.pos):
					selected_property = "Start"
				if button_end.collidepoint(event.pos):
					selected_property = "End"
				if button_wall.collidepoint(event.pos):
					selected_property = "Wall"
				if button_magnet_pos.collidepoint(event.pos):
					selected_property = "Magnet_pos"
				if button_magnet_neg.collidepoint(event.pos):
					selected_property = "Magnet_neg"
				if button_magnet_clear.collidepoint(event.pos):
					selected_property = "clear"
					start = None
					end = None
					grid = make_grid(ROWS, width)
				if button_run.collidepoint(event.pos):
					selected_property = "Button"
					if start and end:
						for row in grid:
							for spot in row:
								spot.update_neighbors(grid)
						algorithm(lambda: draw(win, grid, ROWS, width), grid, start, end)

				if button_quit.collidepoint(event.pos):
					run = False

			if pygame.mouse.get_pressed()[0]: # LEFT
				pos = pygame.mouse.get_pos()
				y, x = pos
				if x > 200 :
					row, col = get_clicked_pos(pos, ROWS, width)
					if row < ROWS and col < ROWS:
						spot = grid[row][col]
					if not start and spot != end and selected_property == "Start":
						start = spot
						start.make_start()
					elif not end and spot != start and selected_property == "End":
						end = spot
						end.make_end()
					elif spot != end and spot != start and selected_property == "Magnet_pos":
						mag_pos = spot
						mag_pos.make_magnet_poss()
						make_magnet_pos(grid,row, col)
					elif spot != end and spot != start and selected_property == "Magnet_neg":
						mag_neg = spot
						mag_neg.make_magnet_neg()
						make_magnet_neg(grid, row, col)
					elif spot != end and spot != start and selected_property == "Wall":
						spot.make_barrier()

			elif pygame.mouse.get_pressed()[2]: # RIGHT
				pos = pygame.mouse.get_pos()
				y, x = pos
				if x > 200:
					row, col = get_clicked_pos(pos, ROWS, width)
					spot = grid[row][col]
					spot.reset()
					if spot == start:
						start = None
					elif spot == end:
						end = None

			if event.type == pygame.KEYDOWN:
				if event.key == pygame.K_SPACE and start and end:
					for row in grid:
						for spot in row:
							spot.update_neighbors(grid)

					algorithm(lambda: draw(win, grid, ROWS, width), grid, start, end)

				if event.key == pygame.K_c:
					start = None
					end = None
					grid = make_grid(ROWS, width)

	pygame.quit()

main(WIN, WIDTH)