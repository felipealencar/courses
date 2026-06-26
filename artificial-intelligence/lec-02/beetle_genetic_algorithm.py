'''
The first step is to create an initial population of beetles.
We could use boolean values, strings or integer values.
For our problem, we will use integer values from 0 to 255.
'''
import numpy as np
from numpy.random import randint

population = []
number_of_generations = 600
population_size = 100
population_fitness = []

def generate_population():
    return np.random.randint(255, size=(population_size, 3))

def fitness_function(x, index):
    return [x[0], x[1], x[2]], x[0] + x[1] + x[2], index

def evaluate_population_fitness(population):
    for index in range(population_size):
        population_fitness.append(fitness_function(population[index], index)[1])
    return population_fitness

def selection(population, population_fitness, k=3):
    # first random selection by tournament
    selection_ix = randint(0, len(population))
    for ix in randint(0, len(population), k-1):
        if population_fitness[ix] < population_fitness[selection_ix]:
            selection_ix = ix
    return population[selection_ix]

def crossover(p1, p2):
    c1, c2 = p1.copy(), p2.copy()
    c1 = [p1[0], p2[1], p2[2]]
    c2 = [p2[0], p1[1], p1[2]]
    return [c1, c2]

def genetic_algorithm():
    population = generate_population()
    print(population)
    best_beetle, best_score, best_position = fitness_function(population[0], 0)
    for gen in range(number_of_generations):
        population_fitness = evaluate_population_fitness(population)

        # check the best beetle
        for i in range(population_size):
            if population_fitness[i] < best_score:
                best_beetle, best_score, best_position = population[i], population_fitness[i], i
                print(best_beetle, "is the best beetle, at position %d, with score %d." % (best_position, best_score))

        # select the best of the population and perform a new generation
        selected = [selection(population, population_fitness) for _ in range(population_size)]

        children = list()

        for i in range(0, population_size, 2):
            p1, p2 = selected[i], selected[i+1]
            for child in crossover(p1, p2):
                children.append(child)
        population = children
    print("Genetic Algorithm:")
    print(population)
    return [best_beetle, best_score]

best_beetle, best_score = genetic_algorithm()
print('Best beetle: %s; Best score: %d' % (best_beetle, best_score))
