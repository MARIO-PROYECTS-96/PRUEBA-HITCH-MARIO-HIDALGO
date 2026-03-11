import React from "react";
import { View, Text, Pressable, Linking } from "react-native";
import { projects } from "../data/portfolio";

const projectNumbers = ["01", "02", "03", "04"];

export default function Projects() {
  return (
    <View id="projects" className="py-28 bg-white px-6 relative overflow-hidden">
      <View className="absolute top-0 left-0 w-72 h-72 dots-pattern opacity-15" />
      <View className="absolute bottom-20 right-0 w-48 h-48 rounded-full bg-amber-50/30 glow-orb" />

      <View className="max-w-5xl mx-auto">
        <View className="items-center mb-16">
          <View className="bg-slate-100 rounded-full px-4 py-1.5 mb-4">
            <Text className="text-xs font-semibold text-slate-500 tracking-widest uppercase">
              Proyectos
            </Text>
          </View>
          <Text className="text-4xl md:text-5xl font-extrabold text-slate-900 text-center tracking-tight mb-3">
            Mi trabajo reciente
          </Text>
          <Text className="text-base text-slate-400 text-center max-w-md">
            Una seleccion de proyectos en los que he trabajado
          </Text>
        </View>

        <View className="flex-row flex-wrap gap-8 justify-center">
          {projects.map((project, index) => (
            <View
              key={project.title}
              className="card-hover bg-white rounded-3xl border border-slate-200 overflow-hidden w-full md:w-[calc(50%-16px)] shadow-sm"
            >
              {/* Project image area with gradient */}
              <View className={`project-image h-52 bg-gradient-to-br ${project.color} items-center justify-center relative`}>
                <View className="absolute inset-0 grid-pattern opacity-20" />
                <View className="absolute top-4 left-4 bg-white/90 rounded-full px-3.5 py-1.5 shadow-sm">
                  <Text className="text-xs font-extrabold text-slate-500 font-mono">
                    {projectNumbers[index] || "00"}
                  </Text>
                </View>
                <Text className="text-6xl font-mono text-slate-300/50 font-extrabold z-10">
                  {"{ }"}
                </Text>
              </View>

              <View className="p-7">
                <Text className="text-xl font-extrabold text-slate-900 mb-2 tracking-tight">
                  {project.title}
                </Text>
                <Text className="text-slate-500 mb-5 leading-6 text-sm">
                  {project.description}
                </Text>

                <View className="flex-row flex-wrap gap-2 mb-6">
                  {project.technologies.map((tech) => (
                    <View key={tech} className="bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-100">
                      <Text className="text-xs text-slate-600 font-semibold">
                        {tech}
                      </Text>
                    </View>
                  ))}
                </View>

                <View className="flex-row gap-3">
                  <Pressable
                    onPress={() => Linking.openURL(project.github)}
                    className="btn-press flex-1 border-2 border-slate-200 py-3 rounded-xl items-center"
                  >
                    <Text className="text-sm text-slate-700 font-bold">
                      GitHub
                    </Text>
                  </Pressable>
                  <Pressable
                    onPress={() => Linking.openURL(project.demo)}
                    className="btn-gradient flex-1 py-3 rounded-xl items-center"
                  >
                    <Text className="text-sm text-white font-bold">
                      Ver Demo
                    </Text>
                  </Pressable>
                </View>
              </View>
            </View>
          ))}
        </View>
      </View>
    </View>
  );
}
