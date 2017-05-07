from sklearn import tree

features = [[150, 1], [130, 1], [192, 0], [180, 0]]
labels = [0, 0, 1, 1]
tr = tree.DecisionTreeClassifier()
tr = tr.fit(features, labels)
print(tr.predict([[150, 0]]))
